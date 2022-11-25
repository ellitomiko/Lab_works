//const create_table_button = document.getElementById("create_table");
const add_line_button = document.getElementById("add_line");
const delete_line_button = document.getElementById("delete_line");

const input_element = document.getElementById("input");

add_line_button.disabled = true;
delete_line_button.disabled = true;

//переменная где мы храним ссылку на таблицу
let table;


//создаем таблицу
function create_table() {
    if (table) {
        alert("Table already created!");
    }
    else {
        table = document.createElement("table");
        document.body.appendChild(table);
        add_line_button.disabled = false;
        delete_line_button.disabled = false;
        add_line();
    }
}

//добавим линию
function add_line() {

    let line = document.createElement("tr");
    let box1 = document.createElement("td");
    let box2 = document.createElement("td");

    //это будет число прям по счету (будет ноль изначально, поэтому прибавляем 1)
    box1.innerText = table.childElementCount + 1;


    line.appendChild(box1);
    line.appendChild(box2);


    table.appendChild(line);
}

function delete_line() {
    let value = parseInt(input_element.value);
    if (!value || (value>(table.childElementCount))){
        alert("It's not an existing number!");
    }
    else{
        //uhiugig
        table.removeChild(table.childNodes.item(value - 1))
    }

}

