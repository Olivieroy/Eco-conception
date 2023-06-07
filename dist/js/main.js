function toggleGrid() {
    const grid = document.querySelector('.grid');
    grid.classList.toggle('active');
}
class Formation {
    constructor({formation_for_libelle,af_duree_cycle_standard,for_type,for_niveau_de_sortie,ens_departement,ens_commune,ens_academie,ens_site_web}) {
        this.name = formation_for_libelle;
        this.duration = af_duree_cycle_standard;
        this.level = for_niveau_de_sortie;
        this.department = ens_departement;
        this.city = ens_commune;
        this.academy = ens_academie;
        this.website = ens_site_web;
        this.type = for_type;
    }

    createItem() {
        const item = document.createElement('li');

        const link = document.createElement('a');
        link.href = this.website;
        link.setAttribute('target', '_blank')
        link.classList.add('formations__wrapper', 'formations__item');

        const name = document.createElement('h4');
        name.innerText = this.name;

        const level = document.createElement('p');
        level.innerText = this.level;

        link.append(name);
        link.append(level);
        item.append(link);
        return item;
    }
}
const getFormations = async () => {
    const search = '';
    const response = await fetch(`https://api.opendata.onisep.fr/api/1.0/dataset/605344579a7d7/search?q=ecologie${search ? '+' + search: ''}&size=25`, {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
        }
    });
    return await response.json();
}

(async () => {
    const list = document.getElementById('formations__list');
    const formations = await getFormations();
    const {results} = formations;

    results.forEach((result) => {
        const formation = new Formation(result);
        const item = formation.createItem();
        list.append(item);
    });
})()
