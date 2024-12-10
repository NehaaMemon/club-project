/*! jQuery Validation Plugin - v1.19.3 - 1/9/2021
 * https://jqueryvalidation.org/
 * Copyright (c) 2021 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"See väli peab olema täidetud.",maxlength:a.validator.format("Palun sisestage vähem kui {0} tähemärki."),minlength:a.validator.format("Palun sisestage vähemalt {0} tähemärki."),rangelength:a.validator.format("Palun sisestage väärtus vahemikus {0} kuni {1} tähemärki."),email:"Palun sisestage korrektne e-maili aadress.",url:"Palun sisestage korrektne URL.",date:"Palun sisestage korrektne kuupäev.",dateISO:"Palun sisestage korrektne kuupäev (YYYY-MM-DD).",number:"Palun sisestage korrektne number.",digits:"Palun sisestage ainult numbreid.",equalTo:"Palun sisestage sama väärtus uuesti.",range:a.validator.format("Palun sisestage väärtus vahemikus {0} kuni {1}."),max:a.validator.format("Palun sisestage väärtus, mis on väiksem või võrdne arvuga {0}."),min:a.validator.format("Palun sisestage väärtus, mis on suurem või võrdne arvuga {0}."),creditcard:"Palun sisestage korrektne krediitkaardi number."}),a});