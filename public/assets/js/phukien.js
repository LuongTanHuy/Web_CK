let pop_song_left = document.getElementById('pop_song_left');
let pop_song_right = document.getElementById('pop_song_right');
let pop_song = document.getElementsByClassName('pop_song')[0];

const itemWidth = 370; // Độ rộng của mỗi item, điều này cần được điều chỉnh tùy thuộc vào layout của bạn

pop_song_right.addEventListener('click', () => {
    const newScrollLeft = pop_song.scrollLeft + itemWidth;
    gsap.to(pop_song, { scrollLeft: newScrollLeft, duration: 0.5, ease: 'power2.inOut' });
});

pop_song_left.addEventListener('click', () => {
    const newScrollLeft = pop_song.scrollLeft - itemWidth;
    gsap.to(pop_song, { scrollLeft: newScrollLeft < 0 ? 0 : newScrollLeft, duration: 0.5, ease: 'power2.inOut' });
});