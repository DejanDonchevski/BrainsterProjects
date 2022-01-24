document.querySelector("#filter-coding").addEventListener("change", filterCoding);
document.querySelector("#filter-design").addEventListener("change", filterDesign);
document.querySelector("#filter-marketing").addEventListener("change", filterMarketing);


function filterCoding() {
    hideAllCards();

    if(document.querySelector("#filter-coding").checked) {

        var codingChecked = document.querySelectorAll(".coding-checked");
          codingChecked.forEach(element => {
              element.style.background = "#ff0000";
              element.style.color = "#302f38";
        });

        var codingCards = document.querySelectorAll(".coding");
        codingCards.forEach(codingCard => {
            codingCard.style.display = "inline-block";
        });

        document.querySelector("#filter-design").checked = false;
        document.querySelector("#filter-marketing").checked = false;

        var designChecked = document.querySelectorAll(".design-checked");
          designChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
          });

          var marketingChecked = document.querySelectorAll(".marketing-checked");
          marketingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
          });

    } else {
        showAllCards();
        var codingChecked = document.querySelectorAll(".coding-checked");
          codingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
            });
    }
}

function filterDesign() {
    hideAllCards();


    if(document.querySelector("#filter-design").checked) {

        var designChecked = document.querySelectorAll(".design-checked");
          designChecked.forEach(element => {
              element.style.background = "#ff0000";
              element.style.color = "#302f38";
            });

        var designCards = document.querySelectorAll(".design");
        designCards.forEach(designCard => {
            designCard.style.display = "inline-block";
        });

        document.querySelector("#filter-coding").checked = false;
        document.querySelector("#filter-marketing").checked = false;

        var marketingChecked = document.querySelectorAll(".marketing-checked");
          marketingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
            });

          var codingChecked = document.querySelectorAll(".coding-checked");
          codingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
            });

    } else {
        showAllCards();
        var designChecked = document.querySelectorAll(".design-checked");
          designChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
            });
    }
}

function filterMarketing() {
    hideAllCards();

    if(document.querySelector("#filter-marketing").checked) {

        var marketingChecked = document.querySelectorAll(".marketing-checked");
          marketingChecked.forEach(element => {
              element.style.background = "#ff0000";
              element.style.color = "#302f38";
            });

        var marketingCards = document.querySelectorAll(".marketing");
        marketingCards.forEach(marketingCard => {
            marketingCard.style.display = "inline-block";
        });

        document.querySelector("#filter-design").checked = false;
        document.querySelector("#filter-coding").checked = false;

        var designChecked = document.querySelectorAll(".design-checked");
          designChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
          });

        var codingChecked = document.querySelectorAll(".coding-checked");
          codingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
            });

    } else {
        showAllCards();
        var marketingChecked = document.querySelectorAll(".marketing-checked");
          marketingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
            });
    }
}


function hideAllCards() {
    var allCards = document.querySelectorAll(".hidden");  

    allCards.forEach(card => {
        card.style.display = "none";
    });
}

function showAllCards() {
    var allCards = document.querySelectorAll(".hidden");  

    allCards.forEach(card => {
        card.style.display = "inline-block";
    });
}



function showSidebar() {
    let mySidebar = document.querySelector('.sidebar');
    mySidebar.style.width = '100%';
}

function closeSidebar() {
    let mySidebar = document.querySelector('.sidebar');
    mySidebar.style.width = '0';
}
