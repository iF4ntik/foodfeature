// отображение мобильного меню
document.addEventListener("DOMContentLoaded", function () {
	document.getElementById("burger").addEventListener("click", function () {
		document.querySelector('.header').classList.toggle("open")
	})
})
// запрет скрола для мобильного меню
document.getElementById("burger").addEventListener("click", function () {
	document.querySelector('.bodySett').classList.toggle("burgerBodySettings")
})
// Работа таблицы
const standartBtn = document.querySelector('.standartBtn');
const standartPlusBtn = document.querySelector('.standartPlusBtn');
const businessBtn = document.querySelector('.businessBtn');
const standartTable = document.querySelector('.standart');
const standartPlusTable = document.querySelector('.standartPlus');
const businessTable = document.querySelector('.business');

function showStandartTable() {
    standartTable.style.display = 'table';
    standartPlusTable.style.display = 'none';
    businessTable.style.display = 'none';

    standartBtn.classList.add('active');
    standartPlusBtn.classList.remove('active');
    businessBtn.classList.remove('active');
}

function showStandartPlusTable() {
    standartTable.style.display = 'none';
    standartPlusTable.style.display = 'table';
    businessTable.style.display = 'none';

    standartBtn.classList.remove('active');
    standartPlusBtn.classList.add('active');
    businessBtn.classList.remove('active');
}

function showBusinessTable() {
    standartTable.style.display = 'none';
    standartPlusTable.style.display = 'none';
    businessTable.style.display = 'table';
    
    standartBtn.classList.remove('active');
    standartPlusBtn.classList.remove('active');
    businessBtn.classList.add('active');
}

standartBtn.addEventListener('click', showStandartTable);
standartPlusBtn.addEventListener('click', showStandartPlusTable);
businessBtn.addEventListener('click', showBusinessTable);

showStandartTable();