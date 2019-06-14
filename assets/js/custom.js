/**
 * Created by dimit on 6/12/2019.
 */
console.log('in custom js');
$('.customGallery').masonry({
    itemSelector: '.gridItem',

    gutter: 20,
    columnWidth: 160,
    percentPosition: true
});