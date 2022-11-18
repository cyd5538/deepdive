gsap.registerPlugin(Flip);

const links = document.querySelectorAll(".nav-item a");
const activenav = document.querySelector('.active-nav');

links.forEach(link => {
    link.addEventListener("click", () => {
        gsap.to(links, {color: '#252525'})

        // Turn navs blue

        if(document.activeElement === link){
            gsap.to(link, {color: '#385ae0'})
        }

        // wanna move the line
        const state = Flip.getState(activenav);
        link.appendChild(activenav)
        Flip.from(state, {
            duration: 1.25,
            absolute: true,
            ease: 'elastic.out(1,0.5)',
        })
    });
})

// Cards

const cards = document.querySelectorAll('.card');

cards.forEach((card,index) => {
    card.addEventListener("click", () => {
        const state = Flip.getState(cards);

        const isCardActive = card.classList.contains('active');
        cards.forEach((othercard, otheridx) => {
            othercard.classList.remove('active');
            othercard.classList.remove('is-inactive');
            if(!isCardActive && index !== otheridx){
                othercard.classList.add('is-inactive')
            }
        });
        if(!isCardActive) card.classList.add("active"); 

        Flip.from(state, {
            duration: 1,
            ease: 'expo.out',
            absolute: true
        })
    })
  }
)