document
        .querySelector("#filter-coding")
        .addEventListener("change", filterCoding);
      document
        .querySelector("#filter-marketing")
        .addEventListener("change", filterMarketing);
      document
        .querySelector("#filter-design")
        .addEventListener("change", filterDesign);

      function filterCoding() {
        hideAllCards();



        if (document.querySelector("#filter-coding").checked) {
          var programmingChecked = document.querySelectorAll(".coding-checked");
          programmingChecked.forEach(element => {
              element.style.background = "#ff0000";
              element.style.color = "#302f38";
          })

          var codingCards = document.querySelectorAll(".coding");
          codingCards.forEach(codingCard => {
            codingCard.style.display = "inline-block";
          });

          document.querySelector("#filter-marketing").checked = false;
          document.querySelector("#filter-design").checked = false;

          var designChecked = document.querySelectorAll(".design-checked");
          designChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
          })
          var marketingChecked = document.querySelectorAll(".marketing-checked");
          marketingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
          })
        }
        else {
          showAllCards();

          var programmingChecked = document.querySelectorAll(".coding-checked");
          programmingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
          })
        }
      }

      function filterMarketing() {
        hideAllCards();

        if (document.querySelector("#filter-marketing").checked) {
          var marketingChecked = document.querySelectorAll(".marketing-checked");
          marketingChecked.forEach(element => {
              element.style.background = "#ff0000";
              element.style.color = "#302f38";
          })

          var marketingCards = document.querySelectorAll(".marketing");
          marketingCards.forEach(marketingCard => {
            marketingCard.style.display = "inline-block";
          });

          document.querySelector("#filter-coding").checked = false;
          document.querySelector("#filter-design").checked = false;

          var designChecked = document.querySelectorAll(".design-checked");
          designChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
          })
          var codingChecked = document.querySelectorAll(".coding-checked");
          codingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
          })
        }
        else {
          showAllCards();

          var marketingChecked = document.querySelectorAll(".marketing-checked");
          marketingChecked.forEach(element => {
              element.style.background = "#302f38";
              element.style.color = "#fff";
          })
        }
    }

      function filterDesign() {
        hideAllCards();

        if (document.querySelector("#filter-design").checked) {
          var designChecked = document.querySelectorAll(".design-checked");
          designChecked.forEach(element => {
              element.style.background = "#ff0000";
              element.style.color = "#302f38";
            })
        }
    }    