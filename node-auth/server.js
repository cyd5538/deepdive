const express = require('express')
const app = express()
const port = 3000
const argon2 = require('argon2');
const cookieParser = require('cookie-parser');
const jwt = require('jsonwebtoken');
const {validUser} = require('./middlewear/auth') 


const database = [{ id: 1, username : 'abc', password: 'abc'}]

app.use(cookieParser());
app.use(express.json());
app.use(express.urlencoded({ extended: false }));

app.get('/users', (req, res) => {
    res.send(database);
})

app.post('/signup', async (req, res) => { 
    const {username, password, age, birthday} = req.body;
    const hash = await argon2.hash(password);
    database.push({
        username,
        password : hash, 
        age,
        birthday
    })
    res.send("success")
})


// 로그인 성공했을 떄 토큰 발급
app.post("/login", async (req,res) => {
    const {username,password} = req.body;
    const user = database.filter((user) => {
        return user.username === username
    })  

    if(user.length === 0){
        res.status(403);
        res.send("해당하는 id가 없습니다")
        return
    }
    if(!(await argon2.verify(user[0].password, password))) {
        console.log(user,user[0].password, password)
        res.send("패스워드가 틀립니다")
        return
    }
    const access_token = jwt.sign({ username }, 'secure');
    res.cookie("access_token", access_token, {
        httpOnly: true
    })
    res.send("로그인 성공")
})

// 인증된 사용자만 쓸 수 있는 API
app.get('/secret_data', validUser, (req, res) => {

})

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})