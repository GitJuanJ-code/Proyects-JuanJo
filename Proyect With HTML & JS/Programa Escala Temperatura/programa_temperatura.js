alert('Programa: Convertidor A Escalas De Temperaturas')


Menu = prompt('Escoge Tu Opcion:\n 1. Convertir Celcius\n 2. Convertir Fahrenheit\n 3. Convertir Kelvin\n 4. Convertir Rankine\n 5. Convertir Réaumur\n 6.Salir')

let celsius;
let fahrenheit;
let kelvin;
let rankine;
let reaumur;
let opc;

if(Menu<=1){
    celsius=prompt('Por Favor Ingrese Un Valor a (celsius):')
    opc = prompt('Escoja A Cual Desea Convertir:\n 1. Convertir Fahrenheit\n 2. Convertir Kelvin\n 3. Convertir Rankine\n 4. Convertir Réaumur')
    if (opc>=1){
        alert('Convirtiendo a Fahrenheit')
        f = celsius*1.8+32
        alert('Convertido a Fahrenheit =' +f+ '')
    }else if (opc<=2){
        alert('Convirtiendo a Kelvin')
        k = (celsius + 273.15)
        alert('Convertido a Kelvin =' +k+ '')
    }else if(opc<=3){
        alert('Convirtiendo a Rankine')
        r = (celsius*1.8)+491.67
        alert('Convertido a Rankine =' +r+ '')
    }else if(opc<=4){
        alert('Convirtiendo a Réaumur')
        re = celsius/1.25
        alert('Convertido a Réaumur =' +re+ '')
    }else{
        alert('No Se Encontro La Opcion')
    }
}else if(Menu<=2){
    fahrenheit = prompt('Por Favor Ingrese Un Valor a (fahrenheit):')
    opc = prompt('Escoja A Cual Desea Convertir:\n 1. Convertir Celsius\n 2. Convertir Kelvin\n 3. Convertir Rankine\n 4. Convertir Réaumur')
    if (opc<=1){
        alert('Convirtiendo a Celsius')
        c = (fahrenheit-32)/1.8
        alert('Convertido a Celcius =' +c+ '')
    }else if (opc<=2){
        alert('Convirtiendo a Kelvin')
        k = (fahrenheit-32)/1.8000+273.15
        alert('Convertido a Kelvin =' +k+ '')
    }else if(opc<=3){
        alert('Convirtiendo a Rankine')
        r = fahrenheit+459.67
        alert('Convertido a Rankine =' +r+ '')
    }else if(opc<=4){
        alert('Convirtiendo a Réaumur')
        re = 4*(fahrenheit-32)/9
        alert('Convertido a Réaumur =' +re+ '')
    }else{
        alert('No Se Encontro La Opcion')
    }
}else if(Menu<=3){
    kelvin = prompt('Por Favor Ingrese Un Valor a (Kelvin):')
    opc = prompt('Escoja A Cual Desea Convertir:\n 1. Convertir Celsius\n 2. Convertir Fahrenheit\n 3. Convertir Rankine\n 4. Convertir Réaumur')
    if (opc<=1){
        alert('Convirtiendo a Celsius')
        c = kelvin-273.15
        alert('Convertido a Celsius =' +c+ '')
    }else if (opc<=2){
        alert('Convirtiendo a Fahrenheit')
        f = (kelvin - 273.15)*1.8000+32.00
        alert('Convertido a Fahrenheit =' +f+ '')
    }else if(opc<=3){
        alert('Convirtiendo a Rankine')
        r = kelvin*9/5
        alert('Convertido a Rankine =' +r+ '')
    }else if(opc<=4){
        alert('Convirtiendo a Réaumur')
        re = (kelvin-273.15)*0.80000
        alert('Convertido a Réaumur =' +re+ '')
    }else{
        alert('No Se Encontro La Opcion')
    }
}else if(Menu<=4){
    rankine = prompt('Por Favor Ingrese Un Valor a (Rankine):')
    opc=prompt('Escoja A Cual Desea Convertir:\n 1.  Convertir Celsius\n 2. Convertir Fahrenheit\n 3. Convertir Kelvin\n 4. Convertir Réaumur')
    if (opc<=1){
        alert('Convirtiendo a Celsius')
        c = (rankine-491.67)*5/9
        alert('Convertido a Celsius =' +c+ '')
    }else if (opc<=2){
        alert('Convirtiendo a Fahrenheit')
        f = (rankine-491.67)+32.00
        alert('Convertido a Fahrenheit =' +f+ '')
    }else if(opc<=3){
        alert('Convirtiendo a Kelvin')
        k = (rankine-491.67)/1.8000+273.15
        alert('Convertido a Kelvin =' +k+ '')
    }else if(opc<=4){
        alert('Convirtiendo a Réaumur')
        re = (rankine-491.67)*0.44444
        alert('Convertido a Réaumur =' +re+ '')
    }else{
        alert('No Se Encontro La Opcion')
    }
}else if(Menu<=5){
    reaumur = prompt('Por Favor Ingrese Un Valor a (Réaumur):')
    opc=prompt('Escoja A Cual Desea Convertir:\n 1.  Convertir Celsius\n 2. Convertir Fahrenheit\n 3. Convertir Kelvin\n 4. Convertir Rankine')
    if (opc<=1){
        alert('Convirtiendo a Celsius')
        c = (reaumur)/0.80000
        alert('Convertido a Celsius =' +c+ '')
    }else if (opc<=2){
        alert('Convirtiendo a Fahrenheit')
        f = reaumur*2.2500+32.00
        alert('Convertido a Fahrenheit =' +f+ '')
    }else if(opc<=3){
        alert('Convirtiendo a Kelvin')
        k = (reaumur*1.25)+273.15
        alert('Convertido a kelvin =' +k+ '')
    }else if(opc<=4){
        alert('Convirtiendo a Rankine')
        r = reaumur*2.2500+491.67
        alert('Convertido a Rankine =' +r+ '')
    }else{
        alert('No Se Encontro La Opcion')
    }
}else{
    alert('Saliendo Del Programa')
}