const toggleBtn = document.querySelector('#btn');
const textCheckBox = document.querySelector('#text-for-checkbox');

toggleBtn.addEventListener('change', function() {
    if (this.checked) {
        document.documentElement.setAttribute('theme', 'dark');
        textCheckBox.innerHTML = "Dark theme";
        sessionStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.setAttribute('theme', 'light');
        textCheckBox.innerHTML = "Light theme";
        sessionStorage.setItem('theme', 'light');
    }
});

function init(){
    if (sessionStorage.getItem('theme') === 'light'){
        document.documentElement.setAttribute("theme", "light");
        textCheckBox.innerHTML = "Light theme";
    } else if (sessionStorage.getItem('theme') === 'dark'){
        document.documentElement.setAttribute('theme', 'dark');
        textCheckBox.innerHTML = "Dark theme";
        toggleBtn.checked = true;
    } else {
        document.documentElement.setAttribute("theme", "light");
        textCheckBox.innerHTML = "Light theme";
    }
}
init();