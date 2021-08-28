const svg1 = document.querySelectorAll("#svg1 path");

    for (let index = 0; index < svg1.length; index++) {
        console.log(`Letter ${index} is ${svg1[index].getTotalLength()}`);
    }

const svg2 = document.querySelectorAll("#svg2 path");

    for (let index = 0; index < svg2.length; index++) {
        console.log(`Letter ${index} is ${svg2[index].getTotalLength()}`);
    }
