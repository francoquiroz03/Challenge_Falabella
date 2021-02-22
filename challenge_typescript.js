let array = [];
let remplace = ["IT", "Falabella", "Integraciones"];
for (i = 1; i <= 100; i++) {
    (
        (i % 3 == 0 || i % 5 == 0) &&
        array.push(remplace[Number(i % 3 == 0 && i % 5 >= 1) + (Number(i % 3 == 0 && i % 5 == 0) * 2)])
    ) ||
    array.push(i);
}
console.log(array);