const express = require('express');
const mongoose = require('mongoose');
const cookieParser = require('cookie-parser');
const session = require('express-session');
const groceriesRoute = require('./routes/groceries');
const marketsRoute = require('./routes/markets');
const authRoute = require('./routes/auth');



const app = express();
const PORT = 3001;

mongoose
  .connect('mongodb://localhost:27017/expressjs_tutorial')
  .then(() => console.log('Connect to db'))
  .catch((err) => console.log(err));
  
app.use(express.json());
app.use(express.urlencoded());

app.use(cookieParser());
app.use(
  session({
    secret: 'APODAJDSDASMCZXMZADASDASDPASDOASDSAK',
    resave: false,
    saveUninitialized: false,
  })
);

app.use((req, res, next) => {
  console.log(`${req.method}:${req.url}`);
  next();
});
 
app.use('/api/v1/groceries', groceriesRoute);
app.use('/api/v1/markets', marketsRoute);
app.use('/api/v1/auth', authRoute);

app.listen(PORT, () => console.log(`Running Express Server on Port ${PORT}!`));