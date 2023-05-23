<form action="" class="search">
    <!-- Search  -->
    <fieldset>
        <div class="field__container">
            <div class="icon field__icon field__icon-left"></div>
            <input type="text" name="search" class="field" placeholder="Quelle formation recherchez-vous ?">
        </div>
    </fieldset>
    <!-- Filter  -->
    <fieldset>
        <div class="row">
            <p>46 formations</p>
            <div>
                <label for="tri" class="label">Trier par</label>
                <select name="tri" id="tri">
                    <option value="1">Pertinence</option>
                    <option value="2">Prix croissant</option>
                    <option value="3">Prix décroissant</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <p>Niveau d'étude visé</p>
            <div>
                <input type="checkbox" name="niveau" id="bac" value="bac">
                <label for="bac" class="">Bac</label>
            
                <input type="checkbox" name="niveau" id="bac+2" value="bac+2">
                <label for="bac+2">Bac+2</label>

                <input type="checkbox" name="niveau" id="bac+3" value="bac+3">
                <label for="bac+3">Bac+3</label>
            </div>
        </div>
        <hr>
        <div class="row">
            <p>Type de formation</p>
            <div>
                <input type="checkbox" name="niveau" id="bac" value="bac">
                <label for="bac" class="">Bac</label>
            
                <input type="checkbox" name="niveau" id="bac+2" value="bac+2">
                <label for="bac+2">Bac+2</label>

                <input type="checkbox" name="niveau" id="bac+3" value="bac+3">
                <label for="bac+3">Bac+3</label>
            </div>
        </div>
        <hr>
        <div class="row">
            <a href="#" class="btn">
                <div class="icon icon--impress"></div>
                <span>Imprimer</span>
            </a>
            <a href="#" class="btn">
                <div class="icon icon--reload"></div>
                <span>Réinitialiser</span>
            </a>
        </div>
    </fieldset>
</form>