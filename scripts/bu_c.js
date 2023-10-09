// let targetImg = RANDOM_(1, 4);
// let nextStockImg = RANDOM_(1, 10);

// if (targetImg == indexImg) {
//     for (let i = 0; i < 100; i++) {
//         target = RANDOM_(1, imageCollection.length);
//         if (target != indexImg) break;
//     }
// }

// indexImg = targetImg;

// if (getKey(nextStockImg) != undefined) {
//     for (let i = 0; i < 100; i++) {
//         nextStockImg = RANDOM_(1, 10);
//         if (getKey(nextStockImg) == undefined) break;
//     }
// }

// for (let imgItem in indexCollection) {
//     if (imgItem = targetImg) {
//         indexCollection[imgItem] = nextStockImg;
//     }
// }

// console.log('currently in img ' + targetImg + ' with stock ' + nextStockImg);

// let target = RANDOM_(1, imageCollection.length);
// let nextStock = RANDOM_(1, 10);

// if (nextStock == index.currentStock) {
//     // console.log ('trigger');
//     for (let i = 0; i < 100; i++) {
//         // console.log(nextStock + ' in stock');
//         nextStock = RANDOM_(1, 10);
//         if (nextStock != index.currentStock) break;
//     }
// } 

// if (target == index.currentImg) {
//     // console.log ('second trigger');
//     for (let i = 0; i < 100; i++) {
//         // console.log(target + ' in image');
//         target = RANDOM_(1, imageCollection.length);
//         if (target != index.currentImg) break;
//     }
// }

// index.currentStock = nextStock;
// index.currentImg = target;

// // console.log('currently in img ' + index.currentImg + ' with stock ' + index.currentStock);

// $(imageCollection[target - 1]).attr('src', '../sfx/images/stock/stock_' + nextStock + '.jpg');

// setTimeout(loopCollection, 2000);