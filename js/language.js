	$(document).on('click', '#lang', function() {
	    if (typeof(Storage) !== "undefined") {
	        if (localStorage.getItem("language") == "Danish") {
	            localStorage.removeItem("language");
	            convertEnglish();


	        } else {
	            localStorage.setItem("language", "Danish");
	            convertDanish();
	        }
	    } else {
	        alert("Sorry, your browser does not support Web Storage...");
	    }
	    console.log(localStorage.getItem("language") == "Danish")
	});

	function convertEnglish() {
	    $(".home_text").html("Home");
	    $(".about_text").html("About Us");
	    $(".contact_text").html("Contact Us");
	    $("#lang").html("Danish");
	    $(".donate_text").html("Donate");
	    $(".result_text").html("Results");
	    $(".quatation").html("No one has ever become good as we are");
	    $(".quatation1").html("It's not how much we give but how much love we put into doing our products");
	    $(".quatation2").html("When we provide good service, we enjoy it at most");
	    $(".quotation3").html("The simplest acts of doing our job, is an act of happiness");
	    $(".name").html("Name");
	    $(".email").html("Email");
	    $(".message").html("Message");
	    $("#choose").html("Choose your option");
	    $("#male").html("Male");
	    $("#female").html("Female");
	    $("#gender").html("Gender");
	    $("#d_text").html("Select The Amount to Donate");
	    $(".about_us").html("AJL is a global organization providing good products, service and customer care. Providing support to various companies and private users. Making the best products for the best people in the world.");
	}

	function convertDanish() {
	    $(".home_text").html("Hjem");
	    $(".about_text").html("Om os");
	    $(".contact_text").html("Kontakt os");
	    $("#lang").html("English");
	    $(".donate_text").html("Doner");
	    $(".result_text").html("Resultater");
	    $(".quatation").html("Ingen er nogensinde blevet god som vi er");
	    $(".quatation1").html("Det er ikke hvor meget vi giver, men hvor meget kærlighed vi sætter ind i vores produkter");
	    $(".quatation2").html("Når vi giver god service, nyder vi det mest");
	    $(".quotation3").html("De enkleste handlinger til at gøre vores arbejde er en lykke");
	    $(".name").html("Navn");
	    $(".email").html("E-mail");
	    $(".message").html("Besked");
	    $("#choose").html("Vælg din mulighed");
	    $("#male").html("Han");
	    $("#female").html("Kvinde");
	    $("#gender").html("Køn");
	    $("#d_text").html("Vælg beløb, der skal doneres");
	    $(".about_us").html("AJL er en global organisation, der leverer gode produkter, service og kundeservice. Tilbyder støtte til forskellige virksomheder og private brugere. Gør de bedste produkter til de bedste mennesker i verden.");
	}