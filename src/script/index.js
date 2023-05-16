import "flowbite";
import prettier from "prettier/standalone";
import phpPlugin from "@prettier/plugin-php/standalone";

prettier.format(YOUR_CODE, {
  plugins: prettierPlugins,
  parser: "php",
});

const darkModeToggle = document.getElementById('darkModeToggle');
const isDarkModeSystem = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

// Cek apakah user pernah mengaktifkan dark mode sebelumnya
const isDarkModeLocal = localStorage.getItem('darkMode');

// Jika user pernah mengaktifkan dark mode sebelumnya, atur toggle-nya sesuai
if (isDarkModeLocal === 'true') {
  darkModeToggle.checked = true;
  document.body.classList.add('dark-mode');
} else if (isDarkModeSystem) { // Jika tidak, cek apakah dark mode diaktifkan di sistem perangkat pengguna
  darkModeToggle.checked = true;
  document.body.classList.add('dark-mode');
}

// Tambahkan event listener pada toggle untuk mengubah tema dan menyimpan ke local storage
darkModeToggle.addEventListener('change', () => {
  if (darkModeToggle.checked) {
    document.body.classList.add('dark-mode');
    localStorage.setItem('darkMode', 'true');
  } else {
    document.body.classList.remove('dark-mode');
    localStorage.setItem('darkMode', 'false');
  }
});
