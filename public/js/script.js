const selectCountry = document.querySelector('#select-country')
const selectState   = document.querySelector('#select-state')
const countries = selectCountry.dataset.countries

function listStatesFrom() {
    console.log(countries)
}

selectCountry.addEventListener("change", listStatesFrom)