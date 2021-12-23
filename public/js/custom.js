const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");

const image = new Image();
image.src = "{{ asset('/images/certificate.jpg') }}";
image.onload = function () {
    drawImage();
};

function drawImage() {
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
}
