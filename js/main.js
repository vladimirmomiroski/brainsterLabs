
    //   Hamburger menu

    const menu = document.querySelector('.menu')

    menu.addEventListener('click', () => {
        menu.classList.toggle('open')
    })

    // Card filters

    document.querySelector("#filter-design").addEventListener("change", filterDesign);
    document.querySelector("#filter-programming").addEventListener("change", filterProgramming);
    document.querySelector("#filter-marketing").addEventListener("change", filterMarketing);
        
        function filterProgramming() {
            hideAllCards();

            if(document.querySelector("#filter-programming").checked) {
                var programmingCards = document.querySelectorAll(".programming");
                programmingCards.forEach(programmingCard => {
                    programmingCard.style.display = "inline-block";
                });

                document.querySelector("#filter-design").checked = false;
                document.querySelector("#filter-marketing").checked = false;
            } else {
                showAllCards();
            }
        }

        function filterDesign() {
            hideAllCards();

            if(document.querySelector("#filter-design").checked) {
                var designCards = document.querySelectorAll(".design");
                designCards.forEach(designCard => {
                    designCard.style.display = "inline-block";
                });

                document.querySelector("#filter-programming").checked = false;
                document.querySelector("#filter-marketing").checked = false;
            } else {
                showAllCards();
            }
        }

        function filterMarketing() {
            hideAllCards();

            if(document.querySelector("#filter-marketing").checked) {
                var marketingCards = document.querySelectorAll(".marketing");
                marketingCards.forEach(marketingCard => {
                    marketingCard.style.display = "inline-block";
                });

                document.querySelector("#filter-design").checked = false;
                document.querySelector("#filter-programming").checked = false;
            } else {
                showAllCards();
            }
        }
       

        function hideAllCards() {
            var allCards = document.querySelectorAll(".card");  

            allCards.forEach(card => {
                card.style.display = "none";
            });
        }

        function showAllCards() {
            var allCards = document.querySelectorAll(".card");  

            allCards.forEach(card => {
                card.style.display = "inline-block";
            });
        }

        // Styling the filter on check

        $("input[type='checkbox']:checked").parent().addClass("selected");
        $('input[type=checkbox]').change(function() {
        $("input[type='checkbox']").parent().removeClass("selected");
        $("input[type='checkbox']:checked").parent().addClass("selected");
          });

        //  Load more unfinished code

    $(document).ready(function(){
        $(".content").slice(0, 6).show();
        $("#loadMore").on("click", function(e){
          e.preventDefault();
          $(".content:hidden").slice(0, 6).slideDown();
          if($(".content:hidden").length == 0) {
            $("#loadMore").text("Нема повеќе картички").addClass("noContent");
          }
        });
      });

     

    


