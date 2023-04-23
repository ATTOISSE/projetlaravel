const btnAjout = document.getElementById('btnAjout');
const fermer = document.querySelector('#fermer');
const formulaire = document.getElementById('formulaire');
btnAjout.addEventListener('click', () => {
    formulaire.removeAttribute('hidden');
});
fermer.addEventListener('click',()=>{
    formulaire.setAttribute('hidden','');
})
