// fungsi hover untuk di area kenapa sewa di trevo

// Function to change the image on hover
function changeImage(element) {
    const image = element.querySelector('img');
    const id_image = image.id;
    switch(id_image){
        case 'image1':
        image.src= "http://127.0.0.1:8000/asset/slider/keys-white.png"; break;
        case 'image2':
        image.src= "http://127.0.0.1:8000/asset/slider/car-white.png"; break;
        case 'image3':
        image.src= "http://127.0.0.1:8000/asset/slider/phone-white.png"; break;
        case 'image4':
        image.src= "http://127.0.0.1:8000/asset/slider/security-white.png"; break;
    } 

     // Change the source to the hover image
}

// Function to restore the initial image on mouseout
function restoreImage(element) {
    const image = element.querySelector('img');
    const id_image = image.id;
    switch(id_image){
        case 'image1':
        image.src= "http://127.0.0.1:8000/asset/slider/keys-purple.png"; break;
        case 'image2':
        image.src= "http://127.0.0.1:8000/asset/slider/car-purple.png"; break;
        case 'image3':
        image.src= "http://127.0.0.1:8000/asset/slider/phone-purple.png"; break;
        case 'image4':
        image.src= "http://127.0.0.1:8000/asset/slider/security-purple.png"; break;
    } 
}