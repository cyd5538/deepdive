const express = require('express');
const app = express();
const path = require('path');
const http = require('http');
const server = http.createServer(app)
const socketIO = require('socket.io');
const { Socket } = require('dgram');

const io = socketIO(server);

app.use(express.static(path.join(__dirname, "src")))

const PORT = process.env.PORT || 5000;

io.on("connection", (socket) => {
    socket.on("chatting", (data) => {
        io.emit("chatting", data)
    })
})

server.listen(PORT, () => {console.log(`Server is ${PORT}`)})