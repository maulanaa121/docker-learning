const express = require("express");
const mongoose = require("mongoose");
const cors = require("cors");

const app = express();

app.use(cors());
app.use(express.json());

mongoose
  .connect("mongodb://mongodb:27017/coba")
  .then(() => {
    console.log("MongoDB berhasil terhubung");

    app.listen(5000, () => {
      console.log("Backend MERN berjalan di port 5000");
    });
  })
  .catch((error) => {
    console.error("MongoDB error:", error);
  });

app.get("/", (req, res) => {
  res.json({
    message: "Backend MERN berjalan!"
  });
});