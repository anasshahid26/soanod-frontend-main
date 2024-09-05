// Menu Dropdown Functionalities
const searchDropdown = document.getElementById('dropdown-container-search');

const toggleDropdown = () => {
    searchDropdown.classList.toggle('active');
}

function handleOutsideClick(event) {
    if (event.target !== searchDropdown && !searchDropdown.contains(event.target)) {
        searchDropdown.classList.remove('active');
    }
}
document.addEventListener('click', handleOutsideClick);

const dropdownButton = document.querySelector('.search-container');
dropdownButton.addEventListener('click', function(event) {
    event.stopPropagation();
});


// Dynamic Year
let year = new Date().getFullYear();

document.getElementById("year").innerHTML = year


// Scroll To Top
const btn = document.getElementById('button');

window.addEventListener('scroll', function() {
    if (window.pageYOffset > 300) {
        btn.classList.add('show');
    } else {
        btn.classList.remove('show');
    }
});

btn.addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});


// Toggle responsive menu
const menu = document.getElementById('responsive-menu');
const menuToggler = document.getElementById('responsive-toggler');

menuToggler.addEventListener('click', () => {
    menu.classList.toggle('active')
})


// Table sticky columns
window.addEventListener('DOMContentLoaded', function () {
    // Check the screen width and add/remove the sticky-columns class accordingly
    function handleStickyColumns() {
      var table = document.getElementById('coins-data-table');
      var minWidth = 992; 
  
      if (window.innerWidth < minWidth) {
        table.classList.add('sticky-columns');
      } else {
        table.classList.remove('sticky-columns');
      }
    }
  
    handleStickyColumns();
    window.addEventListener('resize', handleStickyColumns);


    // Add click event listener to each table row
    const dataTable = document.getElementById('coins-data-table');
    const tableRows = dataTable.querySelectorAll('tbody tr');

    tableRows.forEach(function (row) {
        row.addEventListener('click', function (e) {
            const link = this.querySelector('a');
            if (link) {
                window.location.href = link.href;
            }
        });
    });


    // Adding th to express labeling for numbers
    function addRowNumberIndicator(tableId) {
        const table = document.getElementById(tableId);
        const headerRow = table.querySelector('thead tr');
        const th = document.createElement('th');
        th.textContent = '#';
        th.classList.add('text-left');
        headerRow.insertBefore(th, headerRow.firstChild);
    }
    addRowNumberIndicator('coins-data-table'); 


    // Adding dynamic numbering to table rows
    function addRowNumbers(tableId) {
        const table = document.getElementById(tableId);
        const rows = table.querySelectorAll('tbody tr');
    
        rows.forEach((row, index) => {
            const cell = document.createElement('td');
            cell.textContent = index + 1;
            row.insertBefore(cell, row.firstChild);
        });
    }
    addRowNumbers('coins-data-table');
});
  

  
