var colorPicker = document.querySelector(".color-picker");

colorPicker.addEventListener("input", () => {
    document.body.style.backgroundColor = colorPicker.value;
})

const switchColor = (color) => {
    document.body.style.backgroundColor = color;
    colorPicker.value = color;
}