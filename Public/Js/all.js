  function click_a(divDisplay)
        {
            if(document.getElementById(divDisplay).style.display != "block")
            {
                document.getElementById(divDisplay).style.display = "block";
            }
            else
            {
                document.getElementById(divDisplay).style.display = "none";
            }
        }