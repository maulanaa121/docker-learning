const express = require("express");
const mongoose = require("mongoose");
const cors = require("cors");

const app = express();

app.use(cors());
app.use(express.json());

app.get("/", (req, res) => {
    res.json({
        message: "Backend MERN berjalan!"
    });
});

const PORT = 5000;

app.listen(PORT, () => {
    console.log(`Server berjalan di port ${PORT}`);
});