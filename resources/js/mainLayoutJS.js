window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        //small navbar
        var counter = 0;
        document.getElementById("navbarID").style.backgroundColor = "#2F5596";
        document.getElementById("navbarID").style.fontSize = "20px";
        document.getElementById("navbarID").style.padding = "2px 5%";
        document.getElementById("logoID").style.height = "80px";
        document.getElementById("logoID").src = "/images/logoWhite.png";
        document.getElementById("home").style.color = "white";
        document.getElementById("home").style.marginTop = "20px";
        document.getElementById("uberuns").style.color = "white";
        document.getElementById("referenzen").style.color = "white";
        document.getElementById("jobs").style.color = "white";
        document.getElementById("navbar-buttonID").style.background = "white";
        document.getElementById("navbar-buttonID").style.color = "#2F5596";

        if (counter == 0) {
            //Home animation small
            document.getElementById("home").onmouseover = function() {
                mouseOverSmallHome()
            };
            document.getElementById("home").onmouseout = function() {
                mouseOutSmallHome()
            };

            function mouseOverSmallHome() {
                document.getElementById("home").style.color = "#223d6b";

            }

            function mouseOutSmallHome() {
                document.getElementById("home").style.color = "white";
            }
            //Equipment animation small
            document.getElementById("uberuns").onmouseover = function() {
                mouseOverSmallEquipment()
            };
            document.getElementById("uberuns").onmouseout = function() {
                mouseOutSmallEquipment()
            };

            function mouseOverSmallEquipment() {
                document.getElementById("uberuns").style.color = "#223d6b";
            }

            function mouseOutSmallEquipment() {
                document.getElementById("uberuns").style.color = "white";
            }

            //About animation small
            document.getElementById("referenzen").onmouseover = function() {
                mouseOverSmallAbout()
            };
            document.getElementById("referenzen").onmouseout = function() {
                mouseOutSmallAbout()
            };

            function mouseOverSmallAbout() {
                document.getElementById("referenzen").style.color = "#223d6b";
            }

            function mouseOutSmallAbout() {
                document.getElementById("referenzen").style.color = "white";
            }

            //Jobs
            document.getElementById("jobs").onmouseover = function() {
                mouseOverSmallJobs()
            };
            document.getElementById("jobs").onmouseout = function() {
                mouseOutSmallJobs()
            };

            function mouseOverSmallJobs() {
                document.getElementById("jobs").style.color = "#223d6b";
            }

            function mouseOutSmallJobs() {
                document.getElementById("jobs").style.color = "white";
            }

            //Contact-button animation small
            document.getElementById("navbar-buttonID").onmouseover = function() {
                mouseOverSmallContactBtn()
            };
            document.getElementById("navbar-buttonID").onmouseout = function() {
                mouseOutSmallContactBtn()
            };

            function mouseOverSmallContactBtn() {
                document.getElementById("navbar-buttonID").style.color = "white";
                document.getElementById("navbar-buttonID").style.background = "linear-gradient(to right, white 50%, #223d6b 50%)";
                document.getElementById("navbar-buttonID").style.backgroundSize = "200% 100%";
                document.getElementById("navbar-buttonID").style.backgroundPosition = "right bottom";
            }

            function mouseOutSmallContactBtn() {
                document.getElementById("navbar-buttonID").style.color = "#223d6b";
                document.getElementById("navbar-buttonID").style.background = "linear-gradient(to left, #2F5596 50%, white 50%)";
                document.getElementById("navbar-buttonID").style.backgroundSize = "200% 100%";
                document.getElementById("navbar-buttonID").style.backgroundPosition = "left bottom";

            }
        }

    } else {
        counter = 1;
        document.getElementById("navbarID").style.backgroundColor = "rgba(255, 255, 255)";
        document.getElementById("navbarID").style.fontSize = "20px";
        document.getElementById("navbarID").style.padding = "2px 5%";
        document.getElementById("logoID").style.height = "120px";
        document.getElementById("logoID").src = "/images/logoBlack.png";
        document.getElementById("home").style.color = "#2F5596";
        document.getElementById("uberuns").style.color = "#2F5596";
        document.getElementById("referenzen").style.color = "#2F5596";
        document.getElementById("jobs").style.color = "#2F5596";
        document.getElementById("navbar-buttonID").style.color = "white";
        document.getElementById("navbar-buttonID").style.background = "#2F5596";
        if (counter == 1) {
            //Home animation big
            document.getElementById("home").onmouseover = function() {
                mouseOverBigHome()
            };
            document.getElementById("home").onmouseout = function() {
                mouseOutBigHome()
            };

            function mouseOverBigHome() {
                document.getElementById("home").style.color = "black";
            }

            function mouseOutBigHome() {
                document.getElementById("home").style.color = "#2F5596";
            }

            //Equipment animation big
            document.getElementById("uberuns").onmouseover = function() {
                mouseOverBigEquipment()
            };
            document.getElementById("uberuns").onmouseout = function() {
                mouseOutBigEquipment()
            };

            function mouseOverBigEquipment() {
                document.getElementById("uberuns").style.color = "black";
            }

            function mouseOutBigEquipment() {
                document.getElementById("uberuns").style.color = "#2F5596";
            }

            //About animation big
            document.getElementById("referenzen").onmouseover = function() {
                mouseOverBigAbout()
            };
            document.getElementById("referenzen").onmouseout = function() {
                mouseOutBigAbout()
            };

            function mouseOverBigAbout() {
                document.getElementById("referenzen").style.color = "black";
            }

            function mouseOutBigAbout() {
                document.getElementById("referenzen").style.color = "#2F5596";
            }

            //Jobs

            document.getElementById("jobs").onmouseover = function() {
                mouseOverBigJobs()
            };
            document.getElementById("jobs").onmouseout = function() {
                mouseOutBigJobs()
            };

            function mouseOverBigJobs() {
                document.getElementById("jobs").style.color = "black";
            }

            function mouseOutBigJobs() {
                document.getElementById("jobs").style.color = "#2F5596";
            }

            //Contact Button animation big
            document.getElementById("navbar-buttonID").onmouseover = function() {
                mouseOverBigContactBtn()
            };
            document.getElementById("navbar-buttonID").onmouseout = function() {
                mouseOutBigContactBtn()
            };

            function mouseOverBigContactBtn() {
                document.getElementById("navbar-buttonID").style.color = "white";
                document.getElementById("navbar-buttonID").style.background = "linear-gradient(to right, #2F5596 50%, #223d6b 50%)";
                document.getElementById("navbar-buttonID").style.backgroundSize = "200% 100%";
                document.getElementById("navbar-buttonID").style.backgroundPosition = "right bottom";
            }

            function mouseOutBigContactBtn() {
                document.getElementById("navbar-buttonID").style.color = "white";
                document.getElementById("navbar-buttonID").style.background = "linear-gradient(to left, #2F5596 50%, #223d6b 50%)";
                document.getElementById("navbar-buttonID").style.backgroundSize = "200% 100%";
                document.getElementById("navbar-buttonID").style.backgroundPosition = "left bottom";
            }
        }
    }
}

function openNav() {
    document.getElementById("mySidepanel").style.width = "50%";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}