<?php include('settings.php');$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['SERVER_NAME'];?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Weather Station Bio Info card</title>  
 <style>
 @charset "UTF-8";/*!
 * Flexgrid v2.2.0 (https://flexgrid.co)
 * Copyright 2015-2017 Morten Sørensen (morten@moso.io)
 * Licensed under MIT (https://github.com/moso/flexgrid/blob/master/LICENSE)
 */*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}body{margin:0}.container,.container\:fluid{margin-left:auto;margin-right:auto;padding-left:1rem;padding-right:1rem}.container{width:100%}@media (min-width:34rem){.container{width:36rem}}@media (min-width:48rem){.container{width:45rem}}@media (min-width:62rem){.container{width:59rem}}@media (min-width:75rem){.container{width:72rem}}.container\:fluid{width:100%}.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-1rem;margin-left:-1rem}.lg,.lg\:1,.lg\:10,.lg\:11,.lg\:12,.lg\:2,.lg\:3,.lg\:4,.lg\:5,.lg\:6,.lg\:7,.lg\:8,.lg\:9,.lg\:auto,.md,.md\:1,.md\:10,.md\:11,.md\:12,.md\:2,.md\:3,.md\:4,.md\:5,.md\:6,.md\:7,.md\:8,.md\:9,.md\:auto,.sm,.sm\:1,.sm\:10,.sm\:11,.sm\:12,.sm\:2,.sm\:3,.sm\:4,.sm\:5,.sm\:6,.sm\:7,.sm\:8,.sm\:9,.sm\:auto,.xl,.xl\:1,.xl\:10,.xl\:11,.xl\:12,.xl\:2,.xl\:3,.xl\:4,.xl\:5,.xl\:6,.xl\:7,.xl\:8,.xl\:9,.xl\:auto,.xs,.xs\:1,.xs\:10,.xs\:11,.xs\:12,.xs\:2,.xs\:3,.xs\:4,.xs\:5,.xs\:6,.xs\:7,.xs\:8,.xs\:9,.xs\:auto{position:relative;min-height:1px;width:100%;padding-left:1rem;padding-right:1rem}.xs{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.xs\:auto{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;max-width:none}.xs\:1{-webkit-box-flex:0;-ms-flex:0 0 8.33333333%;flex:0 0 8.33333333%;max-width:8.33333333%}.xs\:2,.xs\:3{-webkit-box-flex:0}.xs\:2{-ms-flex:0 0 16.66666667%;flex:0 0 16.66666667%;max-width:16.66666667%}.xs\:3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.xs\:4,.xs\:5{-webkit-box-flex:0}.xs\:4{-ms-flex:0 0 33.33333333%;flex:0 0 33.33333333%;max-width:33.33333333%}.xs\:5{-ms-flex:0 0 41.66666667%;flex:0 0 41.66666667%;max-width:41.66666667%}.xs\:6,.xs\:7{-webkit-box-flex:0}.xs\:6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.xs\:7{-ms-flex:0 0 58.33333333%;flex:0 0 58.33333333%;max-width:58.33333333%}.xs\:8,.xs\:9{-webkit-box-flex:0}.xs\:8{-ms-flex:0 0 66.66666667%;flex:0 0 66.66666667%;max-width:66.66666667%}.xs\:9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.xs\:10,.xs\:11{-webkit-box-flex:0}.xs\:10{-ms-flex:0 0 83.33333333%;flex:0 0 83.33333333%;max-width:83.33333333%}.xs\:11{-ms-flex:0 0 91.66666667%;flex:0 0 91.66666667%;max-width:91.66666667%}.xs\:12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.xs\:pull\:1{right:8.33333333%}.xs\:pull\:2{right:16.66666667%}.xs\:pull\:3{right:25%}.xs\:pull\:4{right:33.33333333%}.xs\:pull\:5{right:41.66666667%}.xs\:pull\:6{right:50%}.xs\:pull\:7{right:58.33333333%}.xs\:pull\:8{right:66.66666667%}.xs\:pull\:9{right:75%}.xs\:pull\:10{right:83.33333333%}.xs\:pull\:11{right:91.66666667%}.xs\:pull\:12{right:100%}.xs\:push\:1{left:8.33333333%}.xs\:push\:2{left:16.66666667%}.xs\:push\:3{left:25%}.xs\:push\:4{left:33.33333333%}.xs\:push\:5{left:41.66666667%}.xs\:push\:6{left:50%}.xs\:push\:7{left:58.33333333%}.xs\:push\:8{left:66.66666667%}.xs\:push\:9{left:75%}.xs\:push\:10{left:83.33333333%}.xs\:push\:11{left:91.66666667%}.xs\:push\:12{left:100%}.xs\:offset\:0{margin-left:0}.xs\:offset\:1{margin-left:8.33333333%}.xs\:offset\:2{margin-left:16.66666667%}.xs\:offset\:3{margin-left:25%}.xs\:offset\:4{margin-left:33.33333333%}.xs\:offset\:5{margin-left:41.66666667%}.xs\:offset\:6{margin-left:50%}.xs\:offset\:7{margin-left:58.33333333%}.xs\:offset\:8{margin-left:66.66666667%}.xs\:offset\:9{margin-left:75%}.xs\:offset\:10{margin-left:83.33333333%}.xs\:offset\:11{margin-left:91.66666667%}@media (min-width:34rem){.sm{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.sm\:auto{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;max-width:none}.sm\:1{-webkit-box-flex:0;-ms-flex:0 0 8.33333333%;flex:0 0 8.33333333%;max-width:8.33333333%}.sm\:2,.sm\:3{-webkit-box-flex:0}.sm\:2{-ms-flex:0 0 16.66666667%;flex:0 0 16.66666667%;max-width:16.66666667%}.sm\:3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.sm\:4,.sm\:5{-webkit-box-flex:0}.sm\:4{-ms-flex:0 0 33.33333333%;flex:0 0 33.33333333%;max-width:33.33333333%}.sm\:5{-ms-flex:0 0 41.66666667%;flex:0 0 41.66666667%;max-width:41.66666667%}.sm\:6,.sm\:7{-webkit-box-flex:0}.sm\:6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.sm\:7{-ms-flex:0 0 58.33333333%;flex:0 0 58.33333333%;max-width:58.33333333%}.sm\:8,.sm\:9{-webkit-box-flex:0}.sm\:8{-ms-flex:0 0 66.66666667%;flex:0 0 66.66666667%;max-width:66.66666667%}.sm\:9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.sm\:10,.sm\:11{-webkit-box-flex:0}.sm\:10{-ms-flex:0 0 83.33333333%;flex:0 0 83.33333333%;max-width:83.33333333%}.sm\:11{-ms-flex:0 0 91.66666667%;flex:0 0 91.66666667%;max-width:91.66666667%}.sm\:12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.sm\:pull\:1{right:8.33333333%}.sm\:pull\:2{right:16.66666667%}.sm\:pull\:3{right:25%}.sm\:pull\:4{right:33.33333333%}.sm\:pull\:5{right:41.66666667%}.sm\:pull\:6{right:50%}.sm\:pull\:7{right:58.33333333%}.sm\:pull\:8{right:66.66666667%}.sm\:pull\:9{right:75%}.sm\:pull\:10{right:83.33333333%}.sm\:pull\:11{right:91.66666667%}.sm\:pull\:12{right:100%}.sm\:push\:1{left:8.33333333%}.sm\:push\:2{left:16.66666667%}.sm\:push\:3{left:25%}.sm\:push\:4{left:33.33333333%}.sm\:push\:5{left:41.66666667%}.sm\:push\:6{left:50%}.sm\:push\:7{left:58.33333333%}.sm\:push\:8{left:66.66666667%}.sm\:push\:9{left:75%}.sm\:push\:10{left:83.33333333%}.sm\:push\:11{left:91.66666667%}.sm\:push\:12{left:100%}.sm\:offset\:0{margin-left:0}.sm\:offset\:1{margin-left:8.33333333%}.sm\:offset\:2{margin-left:16.66666667%}.sm\:offset\:3{margin-left:25%}.sm\:offset\:4{margin-left:33.33333333%}.sm\:offset\:5{margin-left:41.66666667%}.sm\:offset\:6{margin-left:50%}.sm\:offset\:7{margin-left:58.33333333%}.sm\:offset\:8{margin-left:66.66666667%}.sm\:offset\:9{margin-left:75%}.sm\:offset\:10{margin-left:83.33333333%}.sm\:offset\:11{margin-left:91.66666667%}}@media (min-width:48rem){.md{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.md\:auto{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;max-width:none}.md\:1{-webkit-box-flex:0;-ms-flex:0 0 8.33333333%;flex:0 0 8.33333333%;max-width:8.33333333%}.md\:2,.md\:3{-webkit-box-flex:0}.md\:2{-ms-flex:0 0 16.66666667%;flex:0 0 16.66666667%;max-width:16.66666667%}.md\:3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.md\:4,.md\:5{-webkit-box-flex:0}.md\:4{-ms-flex:0 0 33.33333333%;flex:0 0 33.33333333%;max-width:33.33333333%}.md\:5{-ms-flex:0 0 41.66666667%;flex:0 0 41.66666667%;max-width:41.66666667%}.md\:6,.md\:7{-webkit-box-flex:0}.md\:6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.md\:7{-ms-flex:0 0 58.33333333%;flex:0 0 58.33333333%;max-width:58.33333333%}.md\:8,.md\:9{-webkit-box-flex:0}.md\:8{-ms-flex:0 0 66.66666667%;flex:0 0 66.66666667%;max-width:66.66666667%}.md\:9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.md\:10,.md\:11{-webkit-box-flex:0}.md\:10{-ms-flex:0 0 83.33333333%;flex:0 0 83.33333333%;max-width:83.33333333%}.md\:11{-ms-flex:0 0 91.66666667%;flex:0 0 91.66666667%;max-width:91.66666667%}.md\:12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.md\:pull\:1{right:8.33333333%}.md\:pull\:2{right:16.66666667%}.md\:pull\:3{right:25%}.md\:pull\:4{right:33.33333333%}.md\:pull\:5{right:41.66666667%}.md\:pull\:6{right:50%}.md\:pull\:7{right:58.33333333%}.md\:pull\:8{right:66.66666667%}.md\:pull\:9{right:75%}.md\:pull\:10{right:83.33333333%}.md\:pull\:11{right:91.66666667%}.md\:pull\:12{right:100%}.md\:push\:1{left:8.33333333%}.md\:push\:2{left:16.66666667%}.md\:push\:3{left:25%}.md\:push\:4{left:33.33333333%}.md\:push\:5{left:41.66666667%}.md\:push\:6{left:50%}.md\:push\:7{left:58.33333333%}.md\:push\:8{left:66.66666667%}.md\:push\:9{left:75%}.md\:push\:10{left:83.33333333%}.md\:push\:11{left:91.66666667%}.md\:push\:12{left:100%}.md\:offset\:0{margin-left:0}.md\:offset\:1{margin-left:8.33333333%}.md\:offset\:2{margin-left:16.66666667%}.md\:offset\:3{margin-left:25%}.md\:offset\:4{margin-left:33.33333333%}.md\:offset\:5{margin-left:41.66666667%}.md\:offset\:6{margin-left:50%}.md\:offset\:7{margin-left:58.33333333%}.md\:offset\:8{margin-left:66.66666667%}.md\:offset\:9{margin-left:75%}.md\:offset\:10{margin-left:83.33333333%}.md\:offset\:11{margin-left:91.66666667%}}@media (min-width:62rem){.lg{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.lg\:auto{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;max-width:none}.lg\:1{-webkit-box-flex:0;-ms-flex:0 0 8.33333333%;flex:0 0 8.33333333%;max-width:8.33333333%}.lg\:2,.lg\:3{-webkit-box-flex:0}.lg\:2{-ms-flex:0 0 16.66666667%;flex:0 0 16.66666667%;max-width:16.66666667%}.lg\:3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.lg\:4,.lg\:5{-webkit-box-flex:0}.lg\:4{-ms-flex:0 0 33.33333333%;flex:0 0 33.33333333%;max-width:33.33333333%}.lg\:5{-ms-flex:0 0 41.66666667%;flex:0 0 41.66666667%;max-width:41.66666667%}.lg\:6,.lg\:7{-webkit-box-flex:0}.lg\:6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.lg\:7{-ms-flex:0 0 58.33333333%;flex:0 0 58.33333333%;max-width:58.33333333%}.lg\:8,.lg\:9{-webkit-box-flex:0}.lg\:8{-ms-flex:0 0 66.66666667%;flex:0 0 66.66666667%;max-width:66.66666667%}.lg\:9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.lg\:10,.lg\:11{-webkit-box-flex:0}.lg\:10{-ms-flex:0 0 83.33333333%;flex:0 0 83.33333333%;max-width:83.33333333%}.lg\:11{-ms-flex:0 0 91.66666667%;flex:0 0 91.66666667%;max-width:91.66666667%}.lg\:12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.lg\:pull\:1{right:8.33333333%}.lg\:pull\:2{right:16.66666667%}.lg\:pull\:3{right:25%}.lg\:pull\:4{right:33.33333333%}.lg\:pull\:5{right:41.66666667%}.lg\:pull\:6{right:50%}.lg\:pull\:7{right:58.33333333%}.lg\:pull\:8{right:66.66666667%}.lg\:pull\:9{right:75%}.lg\:pull\:10{right:83.33333333%}.lg\:pull\:11{right:91.66666667%}.lg\:pull\:12{right:100%}.lg\:push\:1{left:8.33333333%}.lg\:push\:2{left:16.66666667%}.lg\:push\:3{left:25%}.lg\:push\:4{left:33.33333333%}.lg\:push\:5{left:41.66666667%}.lg\:push\:6{left:50%}.lg\:push\:7{left:58.33333333%}.lg\:push\:8{left:66.66666667%}.lg\:push\:9{left:75%}.lg\:push\:10{left:83.33333333%}.lg\:push\:11{left:91.66666667%}.lg\:push\:12{left:100%}.lg\:offset\:0{margin-left:0}.lg\:offset\:1{margin-left:8.33333333%}.lg\:offset\:2{margin-left:16.66666667%}.lg\:offset\:3{margin-left:25%}.lg\:offset\:4{margin-left:33.33333333%}.lg\:offset\:5{margin-left:41.66666667%}.lg\:offset\:6{margin-left:50%}.lg\:offset\:7{margin-left:58.33333333%}.lg\:offset\:8{margin-left:66.66666667%}.lg\:offset\:9{margin-left:75%}.lg\:offset\:10{margin-left:83.33333333%}.lg\:offset\:11{margin-left:91.66666667%}}@media (min-width:75rem){.xl{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.xl\:auto{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;max-width:none}.xl\:1{-webkit-box-flex:0;-ms-flex:0 0 8.33333333%;flex:0 0 8.33333333%;max-width:8.33333333%}.xl\:2,.xl\:3{-webkit-box-flex:0}.xl\:2{-ms-flex:0 0 16.66666667%;flex:0 0 16.66666667%;max-width:16.66666667%}.xl\:3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.xl\:4,.xl\:5{-webkit-box-flex:0}.xl\:4{-ms-flex:0 0 33.33333333%;flex:0 0 33.33333333%;max-width:33.33333333%}.xl\:5{-ms-flex:0 0 41.66666667%;flex:0 0 41.66666667%;max-width:41.66666667%}.xl\:6,.xl\:7{-webkit-box-flex:0}.xl\:6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.xl\:7{-ms-flex:0 0 58.33333333%;flex:0 0 58.33333333%;max-width:58.33333333%}.xl\:8,.xl\:9{-webkit-box-flex:0}.xl\:8{-ms-flex:0 0 66.66666667%;flex:0 0 66.66666667%;max-width:66.66666667%}.xl\:9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.xl\:10,.xl\:11{-webkit-box-flex:0}.xl\:10{-ms-flex:0 0 83.33333333%;flex:0 0 83.33333333%;max-width:83.33333333%}.xl\:11{-ms-flex:0 0 91.66666667%;flex:0 0 91.66666667%;max-width:91.66666667%}.xl\:12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.xl\:pull\:1{right:8.33333333%}.xl\:pull\:2{right:16.66666667%}.xl\:pull\:3{right:25%}.xl\:pull\:4{right:33.33333333%}.xl\:pull\:5{right:41.66666667%}.xl\:pull\:6{right:50%}.xl\:pull\:7{right:58.33333333%}.xl\:pull\:8{right:66.66666667%}.xl\:pull\:9{right:75%}.xl\:pull\:10{right:83.33333333%}.xl\:pull\:11{right:91.66666667%}.xl\:pull\:12{right:100%}.xl\:push\:1{left:8.33333333%}.xl\:push\:2{left:16.66666667%}.xl\:push\:3{left:25%}.xl\:push\:4{left:33.33333333%}.xl\:push\:5{left:41.66666667%}.xl\:push\:6{left:50%}.xl\:push\:7{left:58.33333333%}.xl\:push\:8{left:66.66666667%}.xl\:push\:9{left:75%}.xl\:push\:10{left:83.33333333%}.xl\:push\:11{left:91.66666667%}.xl\:push\:12{left:100%}.xl\:offset\:0{margin-left:0}.xl\:offset\:1{margin-left:8.33333333%}.xl\:offset\:2{margin-left:16.66666667%}.xl\:offset\:3{margin-left:25%}.xl\:offset\:4{margin-left:33.33333333%}.xl\:offset\:5{margin-left:41.66666667%}.xl\:offset\:6{margin-left:50%}.xl\:offset\:7{margin-left:58.33333333%}.xl\:offset\:8{margin-left:66.66666667%}.xl\:offset\:9{margin-left:75%}.xl\:offset\:10{margin-left:83.33333333%}.xl\:offset\:11{margin-left:91.66666667%}}.xs\:first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.xs\:last{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.xs\:top{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.xs\:middle{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.xs\:bottom{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.xs\:start{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.xs\:center{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.xs\:end{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.xs\:around{-ms-flex-pack:distribute;justify-content:space-around}.xs\:between{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}@media (min-width:34rem){.sm\:first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.sm\:last{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.sm\:top{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.sm\:middle{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.sm\:bottom{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.sm\:start{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.sm\:center{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.sm\:end{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.sm\:around{-ms-flex-pack:distribute;justify-content:space-around}.sm\:between{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}}@media (min-width:48rem){.md\:first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.md\:last{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.md\:top{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.md\:middle{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.md\:bottom{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.md\:start{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.md\:center{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.md\:end{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.md\:around{-ms-flex-pack:distribute;justify-content:space-around}.md\:between{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}}@media (min-width:62rem){.lg\:first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.lg\:last{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.lg\:top{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.lg\:middle{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.lg\:bottom{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.lg\:start{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.lg\:center{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.lg\:end{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.lg\:around{-ms-flex-pack:distribute;justify-content:space-around}.lg\:between{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}}@media (min-width:75rem){.xl\:first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.xl\:last{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.xl\:top{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.xl\:middle{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.xl\:bottom{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.xl\:start{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.xl\:center{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.xl\:end{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.xl\:around{-ms-flex-pack:distribute;justify-content:space-around}.xl\:between{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}}html{font-size:15px}.container\:fluid,.container\:fluid>.row,body,html{height:95%}body{background-color:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;font-size:1rem;color:#222}@media (min-width:576px){.container\:fluid>.row .xl{max-width:460px}}.card{display:flex;flex-direction:column;margin:1rem 0;background-color:#fff}.card .card\:header{display:flex;width:100%;padding:1rem;background-color:#2d3844;color:#a7b6bd}.card .card\:header .card\:info{height:57px;display:flex;flex-direction:column;justify-content:center}.card .card\:header .card\:info h3{margin:0 0 5px;font-weight:600;line-height:1}.card .card\:header .card\:info p{margin:0;font-weight:300;line-height:1}.card .card\:header .card\:image{display:flex;align-items:center;height:57px;margin-left:auto}.card .card\:header .card\:image img{width:auto;height:57px;border-radius:0;border:0}.card .card\:content ul{margin:0;padding:0;list-style:none}.card .card\:content ul li{height:80px;border-bottom:1px solid #eee;display:flex;padding:1rem 1.5rem;text-decoration:none;outline:0}.card .card\:content ul li,.card .card\:content ul li a:focus{background-color:rgba(45,56,68,.04)}.card .card\:content ul li .collection{display:flex;flex-direction:row}.card .card\:content ul li .collection .collection\:icon{display:flex;align-items:center;width:43px;height:47px}.card .card\:content ul li .collection .collection\:data{display:flex;flex-direction:column;justify-content:center;height:47px;margin-left:1.5rem}.card .card\:content ul li .collection .collection\:data h3{margin:0;font-size:1.3rem;color:#2d3844}.card .card\:content ul li .collection .collection\:data span{font-size:.875rem;font-weight:300;color:rgba(45,56,68,.75)}.card .card\:content ul li .collection svg{max-width:43px;height:calc(80px - 2rem)}.card .card\:content ul li .collection svg.ghost{height:calc(70px - 2rem)}.card .card\:content ul li:last-of-type{border-bottom:0;padding:calc(1rem + .5px) 1.5rem}a{text-decoration:none;color:#aaa;font-size:.875rem;font-weight:300;color:rgba(45,56,68,.75)}.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-10px;margin-left:-0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat;margin-bottom:-20px;}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="<?php echo $stationlocation ?> Weather Station Information"></div>
 
  <div class="container:fluid">
    <div class="row xs:center xs:middle">
        <div class="xl">
            
            <div class="card" style="margin-top:80px;overflow:hidden;max-height:400px;">
                <div class="card:header">
                    <div class="card:info">
                        <h3><?php echo $stationlocation ;?></h3>
                        <p>Weather Station Information</p>
                    </div>
                    <div class="card:image">
                        <img src="img/weather34logo.svg" alt="weather34 logo">
                    </div>                    
                </div>
                <div class="card:content">
                    <ul>
                    
                        <li>
                            <a href="#!">
                                <div class="collection">
                                    <div class="collection:icon">
                                        <svg id="weather34 i-mail" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="rgba(255, 93, 46, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M2 26 L30 26 30 6 2 6 Z M2 6 L16 16 30 6" />
</svg>
                                    </div>
                                    
                                    
                                    <div class="collection:data">
                                        <h3>Mail</h3>
                                        <span><?php echo $email;?></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="collection">
                                    <div class="collection:icon">
                                       <svg id="weather34 i-twitter" viewBox="0 0 64 64" width="32" height="32">
    <path stroke-width="0" fill="rgba(0, 154, 171, 1.000)" d="M60 16 L54 17 L58 12 L51 14 C42 4 28 15 32 24 C16 24 8 12 8 12 C8 12 2 21 12 28 L6 26 C6 32 10 36 17 38 L10 38 C14 46 21 46 21 46 C21 46 15 51 4 51 C37 67 57 37 54 21 Z" />
</svg>
                                    </div>
                                    <div class="collection:data">
                                        <h3>Twitter</h3>
                                        <a href="https://twitter.com/<?php echo $twitter;?>" target="_blank">https://twitter.com/<?php echo $twitter;?></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="collection">
                                    <div class="collection:icon">
                                      <svg id="i-website" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="rgba(144, 177, 42, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M10 29 C10 29 10 24 16 24 22 24 22 29 22 29 L10 29 Z M2 6 L2 23 30 23 30 6 2 6 Z" />
</svg>
                                    </div>
                                    <div class="collection:data">
                                        <h3>Website</h3>
                                        <a href="<?php echo $url;?>" title="weather34" target="_blank"><?php echo $url;?></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="collection">
                                    <div class="collection:icon">
                                        <svg width="60pt" height="60pt" viewBox="0 0 320 320" version="1.1" xmlns="http://www.w3.org/2000/svg">
<g id="#00bcd4ff">
<path fill="#00bcd4" opacity="1.00" d=" M 66.89 64.86 C 88.31 43.61 117.15 30.28 147.13 27.19 C 156.99 25.45 167.30 25.97 177.14 27.81 C 211.50 32.10 243.63 50.71 264.89 77.97 C 280.57 97.75 290.14 122.07 292.81 147.13 C 294.32 153.93 293.70 161.04 293.58 167.97 C 291.83 180.82 289.81 193.79 285.08 205.96 C 273.50 237.56 249.43 264.28 219.33 279.29 C 204.84 286.63 188.96 290.98 172.85 292.81 C 163.21 294.48 153.11 294.08 143.49 292.28 C 113.39 288.60 84.81 274.09 63.91 252.14 C 43.20 230.83 30.26 202.40 27.19 172.88 C 25.97 168.73 26.41 164.32 26.21 160.04 C 26.41 155.74 25.96 151.29 27.19 147.11 C 30.38 116.19 44.49 86.48 66.89 64.86 M 125.87 58.93 C 101.14 67.26 79.77 85.04 67.01 107.81 C 55.71 127.60 51.28 151.08 54.09 173.66 C 54.44 178.19 55.71 182.58 56.75 186.99 C 65.58 221.32 92.63 250.16 126.30 261.22 C 130.70 262.60 135.16 263.76 139.66 264.76 C 140.23 264.87 141.38 265.08 141.96 265.19 C 147.81 266.23 153.75 266.53 159.68 266.75 C 160.42 266.73 161.92 266.70 162.67 266.69 C 169.84 266.50 177.00 265.49 184.00 263.97 C 184.97 263.73 185.94 263.50 186.92 263.25 C 189.97 262.32 193.06 261.48 196.02 260.27 C 198.64 259.07 201.73 259.13 203.98 257.15 C 234.19 243.61 257.16 215.31 264.25 182.97 C 264.33 182.35 264.50 181.10 264.58 180.48 C 265.00 180.19 265.83 179.61 266.25 179.32 C 266.05 177.53 266.01 175.73 265.77 173.94 C 268.42 154.57 265.45 134.49 257.46 116.66 C 246.78 92.61 226.88 72.87 202.80 62.30 C 178.78 51.61 150.73 50.36 125.87 58.93 Z" />
</g>
<g id="#455a64ff">
<path fill="#565f67" opacity="1.00" d=" M 101.34 121.47 C 99.76 112.23 98.30 101.72 103.85 93.45 C 114.27 93.57 124.62 97.68 132.11 104.97 C 133.18 106.43 134.99 105.46 136.37 105.08 C 152.31 98.99 170.31 98.65 186.58 103.70 C 188.92 104.32 191.14 105.63 193.60 105.69 C 201.46 98.22 212.03 93.24 223.04 93.58 C 229.71 104.70 225.94 118.02 223.49 129.78 C 224.74 132.88 226.86 135.57 228.04 138.72 C 233.59 151.39 232.87 166.43 226.84 178.81 C 238.74 177.85 250.91 176.16 262.64 179.38 C 265.41 179.58 265.13 176.44 265.29 174.56 C 261.92 174.81 258.67 173.72 255.33 173.45 C 247.03 172.69 238.80 174.40 230.57 175.23 C 232.74 172.93 236.15 173.75 238.95 173.26 C 247.83 171.85 256.99 171.79 265.77 173.94 C 266.01 175.73 266.05 177.53 266.25 179.32 C 265.83 179.61 265.00 180.19 264.58 180.48 C 264.50 181.10 264.33 182.35 264.25 182.97 C 264.28 182.42 264.35 181.34 264.39 180.79 C 257.40 179.37 250.28 178.00 243.12 178.72 C 237.48 178.62 231.94 180.04 226.29 179.65 C 219.91 191.45 207.70 198.81 195.14 202.47 C 189.20 204.19 183.10 205.23 176.96 205.83 C 189.17 211.42 198.01 223.62 199.60 236.94 C 199.79 243.78 199.86 250.65 199.48 257.48 C 200.98 257.59 202.49 257.35 203.98 257.15 C 201.73 259.13 198.64 259.07 196.02 260.27 C 193.06 261.48 189.97 262.32 186.92 263.25 C 186.67 254.19 187.05 245.12 186.75 236.07 C 186.65 232.18 180.37 232.21 179.81 235.88 C 179.52 245.53 179.85 255.21 179.66 264.87 C 181.11 264.58 182.56 264.28 184.00 263.97 C 177.00 265.49 169.84 266.50 162.67 266.69 C 164.08 266.61 165.49 266.51 166.90 266.40 C 166.68 253.98 167.07 241.54 166.71 229.13 C 166.28 225.56 160.51 225.55 159.84 229.04 C 159.50 241.59 159.86 254.18 159.68 266.75 C 153.75 266.53 147.81 266.23 141.96 265.19 C 143.60 265.41 145.25 265.56 146.91 265.72 C 146.68 255.84 147.04 245.94 146.75 236.07 C 146.76 233.50 143.46 232.34 141.50 233.58 C 139.92 234.43 139.58 236.36 139.68 237.99 C 139.70 246.92 139.77 255.84 139.66 264.76 C 135.16 263.76 130.70 262.60 126.30 261.22 C 126.29 253.86 126.26 246.49 126.32 239.13 C 116.92 239.24 105.47 240.40 98.86 232.17 C 93.70 224.44 90.34 215.09 82.53 209.43 C 81.42 208.14 78.49 207.54 79.25 205.42 C 81.77 204.05 84.88 205.50 87.46 206.17 C 96.01 208.82 98.72 218.61 106.09 222.91 C 111.98 226.77 119.40 225.58 126.01 224.97 C 127.68 224.54 129.98 224.88 131.02 223.19 C 133.50 219.37 135.98 215.46 139.44 212.42 C 142.22 209.65 145.90 208.15 149.03 205.87 C 133.80 203.99 117.74 199.60 106.91 188.06 C 104.07 185.51 102.34 182.06 99.98 179.14 C 94.03 178.28 87.98 178.44 81.98 178.29 C 72.97 177.69 64.24 180.85 56.39 184.98 C 56.48 185.49 56.66 186.49 56.75 186.99 C 55.71 182.58 54.44 178.19 54.09 173.66 C 62.28 172.03 70.60 170.24 79.00 170.92 C 85.00 171.36 91.01 171.56 97.01 171.85 C 92.97 158.90 94.54 144.33 101.86 132.84 C 104.63 129.42 101.81 125.23 101.34 121.47 M 55.75 174.97 C 55.52 175.22 55.07 175.73 54.85 175.98 C 54.82 178.43 55.49 180.79 55.97 183.17 C 61.97 180.36 68.23 177.75 74.91 177.23 C 83.04 176.15 91.20 177.71 99.35 177.59 C 98.71 176.12 98.05 174.65 97.37 173.20 C 90.25 172.59 83.06 172.76 75.98 171.73 C 69.24 172.78 62.51 174.04 55.75 174.97 Z" />
</g>
</svg>
                                    </div>
                                    <div class="collection:data">
                                        <h3>Template Download</h3>
                                        <a href="https://github.com/weather34/Meteobridge-Weather34-Template" alt="weather34 Meteobridge Template Download" title="weather34 Meteobridge Template Download" target="_blank">https://github.com/weather34/Meteobridge-Weather34-Template</a>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        
        </div>
    </div>
</div>

</body>

</html>