<section class="layout">
    <div class="container">
        <form action="" class="search">
            <!-- Search  -->
            <fieldset>
                <div class="field__container">
                    <div class="icon field__icon field__icon-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg>
                    </div>
                    <input type="search" name="search" class="field" placeholder="Quelle formation recherchez-vous ?">
                </div>
            </fieldset>
            <!-- Filter  -->
            <fieldset>
                <div class="row">
                    <p>46 formations</p>
                    <div>
                        <label for="tri" class="label tri-label">Trier par</label>
                        <select name="tri" id="tri" class="field">
                            <option value="1">Pertinence</option>
                            <option value="2">Prix croissant</option>
                            <option value="3">Prix décroissant</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <p><strong>Niveau d'étude visé</strong></p>
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
                    <p><strong>Type de formation</strong></p>
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
                        <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect width="12" height="8" x="6" y="14"></rect></svg>
                        </div>
                        <span>Imprimer</span>
                    </a>
                    <a href="#" class="btn">
                        <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw"><path d="M3 2v6h6"></path><path d="M3 13a9 9 0 1 0 3-7.7L3 8"></path></svg>
                        </div>
                        <span>Réinitialiser</span>
                    </a>
                </div>
            </fieldset>
        </form>
    </div>
</section>