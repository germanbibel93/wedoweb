let listPhotos = []
let cardsContainer = document.getElementById('cards')
let load_more = document.getElementById('loadmore-content')
let spinner = document.getElementById('spinner')
let footer = document.getElementById('footer')
let link_more = document.getElementById('link-more')
let search = document.getElementById('search')
let querySelect = 'nature'

setTimeout(function(){ 
    spinner.classList.add('hidden')
    cardsContainer.classList.remove('hidden')
}, 2000);
