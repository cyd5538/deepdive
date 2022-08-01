const { response } = require("express");
const express = require("express");

const app = express();
const PORT = 3001;

app.use(express.json());
app.use(express.urlencoded());
app.use((req, res, next) => {
    console.log(`${req.method}:${req.url}`);
    next();
})

app.listen(PORT, () => console.log(`이 ${PORT}에서 실행중입니다`));

const groceryList = [
  {
    item: "milk",
    quantity: 2,
  },
  {
    item: "cereal",
    quantity: 1,
  },
  {
    item: "pop-tarts",
    quantity: 1,
  },
];

app.get("/groceries", (req, res) => {
    res.send(groceryList);
});

app.get("/groceries/:item", (req, res) => {
    const { item } = req.params;
    const groceryItem = groceryList.find((g) => g.item === item)
    res.send(groceryItem);
})

app.post("/groceries", (req, res) => {
  console.log(req.body);
  groceryList.push(req.body);
  res.send(201);
});

