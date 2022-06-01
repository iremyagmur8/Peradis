

<style>

.errorpage .top {
  margin-top: 30px;
}

.errorpage  .container {
  margin: 0 auto;
  position: relative;
  width: 250px;
  height: 250px;
  margin-top: -40px;
}

.errorpage  .ghost {
  width: 50%;
  height: 53%;
  left: 25%;
  top: 10%;
  position: absolute;
  border-radius: 50% 50% 0 0;
  background: #21cdc0;
  border: 1px solid #21cdc0;
  border-bottom: none;
  animation: float 2s ease-out infinite;
}

.errorpage  .ghost-copy {
  width: 50%;
  height: 53%;
  left: 25%;
  top: 10%;
  position: absolute;
  border-radius: 50% 50% 0 0;
  background: #21cdc0;
  border: 1px solid #21cdc0;
  border-bottom: none;
  animation: float 2s ease-out infinite;
  z-index: 0;
}

.errorpage  .face {
  position: absolute;
  width: 100%;
  height: 60%;
  top: 20%;
}

.errorpage  .eye, .eye-right {
  position: absolute;
  background: #585959;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  top: 40%;
}

.errorpage  .eye {
  left: 25%;
}

.errorpage  .eye-right {
  right: 25%;
}

.errorpage  .mouth {
  position: absolute;
  top: 50%;
  left: 45%;
  width: 10px;
  height: 10px;
  border: 3px solid;
  border-radius: 50%;
  border-color: transparent #585959 #585959 transparent;
  transform: rotate(45deg);
}

.errorpage  .one, .two, .three, .four {
  position: absolute;
  background: #21cdc0;
  top: 85%;
  width: 25%;
  height: 23%;
  border: 1px solid #21cdc0;
  z-index: 0;
}

.errorpage  .one {
  border-radius: 0 0 100% 30%;
  left: -1px;
}

.errorpage  .two {
  left: 23%;
  border-radius: 0 0 50% 50%;
}

.errorpage  .three {
  left: 50%;
  border-radius: 0 0 50% 50%;
}

.errorpage  .four {
  left: 74.5%;
  border-radius: 0 0 30% 100%;
}

.errorpage  .shadow {
  position: absolute;
  width: 30%;
  height: 7%;
  background: #21cdc0;
  opacity: 0.6;
  left: 35%;
  top: 80%;
  border-radius: 50%;
  animation: scale 2s infinite;
}

@keyframes scale {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes float {
  50% {
    transform: translateY(15px);
  }
}
.errorpage  .bottom {
  margin-top: 10px;
}

/*text styling*/
.errorpage h1 {
  color: #21cdc0;
  text-align: center;
  font-size: 9em;
  margin: 0;
  text-shadow: -1px 0 #BFC0C0, 0 1px #BFC0C0, 1px 0 #BFC0C0, 0 -1px #BFC0C0;
}

.errorpage  h3 {
  font-family: "Lato", sans-serif;
  font-size: 2em;
  text-transform: uppercase;
  text-align: center;
  color: #21cdc0;
  margin-top: -20px;
  font-weight: 900;
}

.errorpage  p {
  text-align: center;
  font-family: "Lato", sans-serif;
  color: #585959;
  font-size: 1em;
  margin-top: -20px;
  text-transform: uppercase;
}

.errorpage  .search {
  text-align: center;
}

.errorpage  .buttons {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 10px;
}

.errorpage .btn {
  background: #21cdc0;
  padding: 15px 20px;
  margin: 5px;
  color: #585959;
  font-family: "Lato", sans-serif;
  text-transform: uppercase;
  font-size: 1em;
  letter-spacing: 1px;
  border: 0;
}
.errorpage .btn:hover {
  transition: all 0.4s ease-out;
  color:#21cdc0;
}
</style>
<div class="errorpage">
<div id="background"></div>
<div class="top">
  <h1>404</h1>
  <h3>page not found</h3>
</div>
<div class="container">
  <div class="ghost-copy">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
    <div class="four"></div>
  </div>
  <div class="ghost">
    <div class="face">
      <div class="eye"></div>
      <div class="eye-right"></div>
      <div class="mouth"></div>
    </div>
  </div>
  <div class="shadow"></div>
</div>
<div class="bottom">
  <p><?=translator('The page you were trying to reach has been removed or moved to another location.','404')?>
</p>

  <div class="buttons">
    <a href=<?= translator('home', 'path'); ?>><button class="btn"><?=translator('home','header')?></button></a>
  </div>
</div>
</div>
