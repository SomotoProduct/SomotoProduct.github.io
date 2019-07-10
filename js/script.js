(function () {

  let totalRows = 4;
  let itemColumn = 0;
  let numberOfItems = document.getElementsByClassName('wrapper')[0].getElementsByClassName('item').length;
  let item = document.getElementsByClassName('wrapper')[0].getElementsByClassName('item');

  for (let rowCount = 0; rowCount < totalRows; rowCount++) {
    newColumn = document.createElement('div');
    newColumn.className = 'col';
    document.getElementsByClassName('wrapper')[0].appendChild(newColumn);
  }

  for (let itemCount = 0; itemCount < numberOfItems; itemCount++) {
    document.getElementsByClassName('col')[itemColumn].appendChild(item[0]);
    if (itemColumn < totalRows - 1) {
      itemColumn++;
    } else {
      itemColumn = 0;
    }
  }

})();