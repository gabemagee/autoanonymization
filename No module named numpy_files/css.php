syntaxhighlighter a,
.syntaxhighlighter div,
.syntaxhighlighter code,
.syntaxhighlighter table,
.syntaxhighlighter table td,
.syntaxhighlighter table tr,
.syntaxhighlighter table tbody,
.syntaxhighlighter table thead,
.syntaxhighlighter table caption,
.syntaxhighlighter textarea {
  -moz-border-radius: 0 0 0 0 !important;
  -webkit-border-radius: 0 0 0 0 !important;
  background: none !important;
  border: 0 !important;
  bottom: auto !important;
  float: none !important;
  height: auto !important;
  left: auto !important;
  line-height: 1.1em !important;
  margin: 0 !important;
  outline: 0 !important;
  overflow: visible !important;
  padding: 0 !important;
  position: static !important;
  right: auto !important;
  text-align: left !important;
  top: auto !important;
  vertical-align: baseline !important;
  width: auto !important;
  box-sizing: content-box !important;
  font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important;
  font-weight: normal !important;
  font-style: normal !important;
  font-size: 1em !important;
  min-height: inherit !important;
  min-height: auto !important; }

.syntaxhighlighter {
  width: 99% !important;
  margin: 0 0 1em 0 !important;
  position: relative !important;
  overflow: auto !important;
  overflow-y: auto !important;
  max-height: 400px;
  min-height: 10px;
 
  border-radius:8px;
  -moz-border-radius:8px;
  -webkit-border-radius:8px;
  border:2px solid rgba(48, 102, 132, 0.84);
  -moz-border: 2px solid rgba(48, 102, 132, 0.84);
  -webkit-border: 2px solid rgba(48, 102, 132, 0.84);
  padding: 10px 0 10px 10px;
  font-size: 1em !important; }
  .syntaxhighlighter .container:before, .syntaxhighlighter .container:after {
    content: none !important; }
  .syntaxhighlighter.source {
    overflow: hidden !important; }
  .syntaxhighlighter .bold {
    font-weight: bold !important; }
  .syntaxhighlighter .italic {
    font-style: italic !important; }
  .syntaxhighlighter .line {
    white-space: pre !important; }
  .syntaxhighlighter table {
    width: 100% !important; }
    .syntaxhighlighter table caption {
      text-align: left !important;
      padding: .5em 0 0.5em 1em !important; }
    .syntaxhighlighter table td.code {
      width: 100% !important; }
      .syntaxhighlighter table td.code .container {
        position: relative !important; }
        .syntaxhighlighter table td.code .container textarea {
          box-sizing: border-box !important;
          position: absolute !important;
          left: 0 !important;
          top: 0 !important;
          width: 100% !important;
          height: 100% !important;
          border: none !important;
          background: white !important;
          padding-left: 1em !important;
          overflow: hidden !important;
          white-space: pre !important; }
    .syntaxhighlighter table td.gutter .line {
      text-align: right !important;
      padding: 0 0.5em 0 1em !important; }
    .syntaxhighlighter table td.code .line {
      padding: 0 1em !important; }
  .syntaxhighlighter.nogutter td.code .container textarea, .syntaxhighlighter.nogutter td.code .line {
    padding-left: 0em !important; }
  .syntaxhighlighter.show {
    display: block !important; }
  .syntaxhighlighter.collapsed table {
    display: none !important; }
  .syntaxhighlighter.collapsed .toolbar {
    padding: 0.1em 0.8em 0em 0.8em !important;
    font-size: 1em !important;
    position: static !important;
    width: auto !important;
    height: auto !important; }
    .syntaxhighlighter.collapsed .toolbar span {
      display: inline !important;
      margin-right: 1em !important; }
      .syntaxhighlighter.collapsed .toolbar span a {
        padding: 0 !important;
        display: none !important; }
        .syntaxhighlighter.collapsed .toolbar span a.expandSource {
          display: inline !important; }
  .syntaxhighlighter .toolbar {
    position: absolute !important;
    right: 1px !important;
    top: 1px !important;
    width: 11px !important;
    height: 11px !important;
    font-size: 10px !important;
    z-index: 10 !important; }
    .syntaxhighlighter .toolbar span.title {
      display: inline !important; }
    .syntaxhighlighter .toolbar a {
      display: block !important;
      text-align: center !important;
      text-decoration: none !important;
      padding-top: 1px !important; }
      .syntaxhighlighter .toolbar a.expandSource {
        display: none !important; }
  .syntaxhighlighter.ie {
    font-size: .9em !important;
    padding: 1px 0 1px 0 !important; }
    .syntaxhighlighter.ie .toolbar {
      line-height: 8px !important; }
      .syntaxhighlighter.ie .toolbar a {
        padding-top: 0px !important; }
  .syntaxhighlighter.printing .line.alt1 .content,
  .syntaxhighlighter.printing .line.alt2 .content,
  .syntaxhighlighter.printing .line.highlighted .number,
  .syntaxhighlighter.printing .line.highlighted.alt1 .content,
  .syntaxhighlighter.printing .line.highlighted.alt2 .content {
    background: none !important; }
  .syntaxhighlighter.printing .line .number {
    color: #bbbbbb !important; }
  .syntaxhighlighter.printing .line .content {
    color: black !important; }
  .syntaxhighlighter.printing .toolbar {
    display: none !important; }
  .syntaxhighlighter.printing a {
    text-decoration: none !important; }
  .syntaxhighlighter.printing .plain, .syntaxhighlighter.printing .plain a {
    color: black !important; }
  .syntaxhighlighter.printing .comments, .syntaxhighlighter.printing .comments a {
    color: #008200 !important; }
  .syntaxhighlighter.printing .string, .syntaxhighlighter.printing .string a {
    color: blue !important; }
  .syntaxhighlighter.printing .keyword {
    color: #006699 !important;
    font-weight: bold !important; }
  .syntaxhighlighter.printing .preprocessor {
    color: gray !important; }
  .syntaxhighlighter.printing .variable {
    color: #aa7700 !important; }
  .syntaxhighlighter.printing .value {
    color: #009900 !important; }
  .syntaxhighlighter.printing .functions {
    color: #ff1493 !important; }
  .syntaxhighlighter.printing .constants {
    color: #0066cc !important; }
  .syntaxhighlighter.printing .script {
    font-weight: bold !important; }
  .syntaxhighlighter.printing .color1, .syntaxhighlighter.printing .color1 a {
    color: gray !important; }
  .syntaxhighlighter.printing .color2, .syntaxhighlighter.printing .color2 a {
    color: #ff1493 !important; }
  .syntaxhighlighter.printing .color3, .syntaxhighlighter.printing .color3 a {
    color: red !important; }
  .syntaxhighlighter.printing .break, .syntaxhighlighter.printing .break a {
    color: black !important; }

.syntaxhighlighter {
  background-color: white !important; }
  .syntaxhighlighter .line.alt1 {
    background-color: white !important; }
  .syntaxhighlighter .line.alt2 {
    background-color: white !important; }
  .syntaxhighlighter .line.highlighted.alt1, .syntaxhighlighter .line.highlighted.alt2 {
    background-color: #e0e0e0 !important; }
  .syntaxhighlighter .line.highlighted.number {
    color: black !important; }
  .syntaxhighlighter table caption {
    color: black !important; }
  .syntaxhighlighter table td.code .container textarea {
    background: white;
    color: black; }
  .syntaxhighlighter .gutter {
    color: #afafaf !important; }
    .syntaxhighlighter .gutter .line {
      border-right: 3px solid #6ce26c !important; }
      .syntaxhighlighter .gutter .line.highlighted {
        background-color: #6ce26c !important;
        color: white !important; }
  .syntaxhighlighter.printing .line .content {
    border: none !important; }
  .syntaxhighlighter.collapsed {
    overflow: visible !important; }
    .syntaxhighlighter.collapsed .toolbar {
      color: #00f !important;
      background: #fff !important;
      border: 1px solid #6ce26c !important; }
      .syntaxhighlighter.collapsed .toolbar a {
        color: #00f !important; }
        .syntaxhighlighter.collapsed .toolbar a:hover {
          color: #f00 !important; }
  .syntaxhighlighter .toolbar {
    color: #fff !important;
    background: #6ce26c !important;
    border: none !important; }
    .syntaxhighlighter .toolbar a {
      color: #fff !important; }
      .syntaxhighlighter .toolbar a:hover {
        color: #000 !important; }
  .syntaxhighlighter .plain, .syntaxhighlighter .plain a {
    color: black !important; }
  .syntaxhighlighter .comments, .syntaxhighlighter .comments a {
    color: #008200 !important; }
  .syntaxhighlighter .string, .syntaxhighlighter .string a {
    color: blue !important; }
  .syntaxhighlighter .keyword {
    font-weight: bold !important;
    color: #006699 !important; }
  .syntaxhighlighter .preprocessor {
    color: gray !important; }
  .syntaxhighlighter .variable {
    color: #aa7700 !important; }
  .syntaxhighlighter .value {
    color: #009900 !important; }
  .syntaxhighlighter .functions {
    color: #ff1493 !important; }
  .syntaxhighlighter .constants {
    color: #0066cc !important; }
  .syntaxhighlighter .script {
    font-weight: bold !important;
    color: #006699 !important;
    background-color: none !important; }
  .syntaxhighlighter .color1, .syntaxhighlighter .color1 a {
    color: gray !important; }
  .syntaxhighlighter .color2, .syntaxhighlighter .color2 a {
    color: #ff1493 !important; }
  .syntaxhighlighter .color3, .syntaxhighlighter .color3 a {
    color: red !important; }



/*.syntaxhighlighter a,
.syntaxhighlighter div,
.syntaxhighlighter code,
.syntaxhighlighter table,
.syntaxhighlighter table td,
.syntaxhighlighter table tr,
.syntaxhighlighter table tbody,
.syntaxhighlighter table thead,
.syntaxhighlighter table caption,
.syntaxhighlighter textarea {
  -moz-border-radius: 0 0 0 0 !important;
  -webkit-border-radius: 0 0 0 0 !important;
  background: none !important;
  border: 0 !important;
  bottom: auto !important;
  float: none !important;
  height: auto !important;
  left: auto !important;
  line-height: 1.1em !important;
  margin: 0 !important;
  outline: 0 !important;
  overflow: visible !important;
  padding: 0 !important;
  position: static !important;
  right: auto !important;
  text-align: left !important;
  top: auto !important;
  vertical-align: baseline !important;
  width: auto !important;
  box-sizing: content-box !important;
  font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important;
  font-weight: normal !important;
  font-style: normal !important;
  font-size: 1em !important;
  min-height: inherit !important;
  min-height: auto !important; }

.syntaxhighlighter {
  width: 99% !important;
  margin: 1em 0 1em 0 !important;
  position: relative !important;
overflow-y: auto !important;
  max-height: 400px;
  min-height: 10px;
 
  border-radius:8px;
  -moz-border-radius:8px;
  -webkit-border-radius:8px;
  border:1px solid black;
  -moz-border: 1px solid black;
  -webkit-border: 1px solid black;
  padding:5px;
  font-size: 1em !important; }
  .syntaxhighlighter .container:before, .syntaxhighlighter .container:after {
    content: none !important; }
  .syntaxhighlighter.source {
    overflow: hidden !important; }
  .syntaxhighlighter .bold {
    font-weight: bold !important; }
  .syntaxhighlighter .italic {
    font-style: italic !important; }
  .syntaxhighlighter .line {
    white-space: pre !important; }
  .syntaxhighlighter table {
    width: 100% !important; }
    .syntaxhighlighter table caption {
      text-align: left !important;
      padding: .5em 0 0.5em 1em !important; }
    .syntaxhighlighter table td.code {
      width: 100% !important; }
      .syntaxhighlighter table td.code .container {
        position: relative !important; }
        .syntaxhighlighter table td.code .container textarea {
          box-sizing: border-box !important;
          position: absolute !important;
          left: 0 !important;
          top: 0 !important;
          width: 100% !important;
          height: 100% !important;
          border: none !important;
          background: white !important;
          padding-left: 1em !important;
          overflow: hidden !important;
          white-space: pre !important; }
    .syntaxhighlighter table td.gutter .line {
      text-align: right !important;
      padding: 0 0.5em 0 1em !important; }
    .syntaxhighlighter table td.code .line {
      padding: 0 1em !important; }
  .syntaxhighlighter.nogutter td.code .container textarea, .syntaxhighlighter.nogutter td.code .line {
    padding-left: 0em !important; }
  .syntaxhighlighter.show {
    display: block !important; }
  .syntaxhighlighter.collapsed table {
    display: none !important; }
  .syntaxhighlighter.collapsed .toolbar {
    padding: 0.1em 0.8em 0em 0.8em !important;
    font-size: 1em !important;
    position: static !important;
    width: auto !important;
    height: auto !important; }
    .syntaxhighlighter.collapsed .toolbar span {
      display: inline !important;
      margin-right: 1em !important; }
      .syntaxhighlighter.collapsed .toolbar span a {
        padding: 0 !important;
        display: none !important; }
        .syntaxhighlighter.collapsed .toolbar span a.expandSource {
          display: inline !important; }
  .syntaxhighlighter .toolbar {
    position: absolute !important;
    right: 1px !important;
    top: 1px !important;
    width: 11px !important;
    height: 11px !important;
    font-size: 10px !important;
    z-index: 10 !important; }
    .syntaxhighlighter .toolbar span.title {
      display: inline !important; }
    .syntaxhighlighter .toolbar a {
      display: block !important;
      text-align: center !important;
      text-decoration: none !important;
      padding-top: 1px !important; }
      .syntaxhighlighter .toolbar a.expandSource {
        display: none !important; }
  .syntaxhighlighter.ie {
    font-size: .9em !important;
    padding: 1px 0 1px 0 !important; }
    .syntaxhighlighter.ie .toolbar {
      line-height: 8px !important; }
      .syntaxhighlighter.ie .toolbar a {
        padding-top: 0px !important; }
  .syntaxhighlighter.printing .line.alt1 .content,
  .syntaxhighlighter.printing .line.alt2 .content,
  .syntaxhighlighter.printing .line.highlighted .number,
  .syntaxhighlighter.printing .line.highlighted.alt1 .content,
  .syntaxhighlighter.printing .line.highlighted.alt2 .content {
    background: none !important; }
  .syntaxhighlighter.printing .line .number {
    color: #bbbbbb !important; }
  .syntaxhighlighter.printing .line .content {
    color: black !important; }
  .syntaxhighlighter.printing .toolbar {
    display: none !important; }
  .syntaxhighlighter.printing a {
    text-decoration: none !important; }
  .syntaxhighlighter.printing .plain, .syntaxhighlighter.printing .plain a {
    color: black !important; }
  .syntaxhighlighter.printing .comments, .syntaxhighlighter.printing .comments a {
    color: #008200 !important; }
  .syntaxhighlighter.printing .string, .syntaxhighlighter.printing .string a {
    color: blue !important; }
  .syntaxhighlighter.printing .keyword {
    color: #006699 !important;
    font-weight: bold !important; }
  .syntaxhighlighter.printing .preprocessor {
    color: gray !important; }
  .syntaxhighlighter.printing .variable {
    color: #aa7700 !important; }
  .syntaxhighlighter.printing .value {
    color: #009900 !important; }
  .syntaxhighlighter.printing .functions {
    color: #ff1493 !important; }
  .syntaxhighlighter.printing .constants {
    color: #0066cc !important; }
  .syntaxhighlighter.printing .script {
    font-weight: bold !important; }
  .syntaxhighlighter.printing .color1, .syntaxhighlighter.printing .color1 a {
    color: gray !important; }
  .syntaxhighlighter.printing .color2, .syntaxhighlighter.printing .color2 a {
    color: #ff1493 !important; }
  .syntaxhighlighter.printing .color3, .syntaxhighlighter.printing .color3 a {
    color: red !important; }
  .syntaxhighlighter.printing .break, .syntaxhighlighter.printing .break a {
    color: black !important; }

.syntaxhighlighter {
  background-color: #0f192a !important; }
  .syntaxhighlighter .line.alt1 {
    background-color: #0f192a !important; }
  .syntaxhighlighter .line.alt2 {
    background-color: #0f192a !important; }
  .syntaxhighlighter .line.highlighted.alt1, .syntaxhighlighter .line.highlighted.alt2 {
    background-color: #253e5a !important; }
  .syntaxhighlighter .line.highlighted.number {
    color: #38566f !important; }
  .syntaxhighlighter table caption {
    color: #d1edff !important; }
  .syntaxhighlighter table td.code .container textarea {
    background: #0f192a;
    color: #d1edff; }
  .syntaxhighlighter .gutter {
    color: #afafaf !important; }
    .syntaxhighlighter .gutter .line {
      border-right: 3px solid #435a5f !important; }
      .syntaxhighlighter .gutter .line.highlighted {
        background-color: #435a5f !important;
        color: #0f192a !important; }
  .syntaxhighlighter.printing .line .content {
    border: none !important; }
  .syntaxhighlighter.collapsed {
    overflow: visible !important; }
    .syntaxhighlighter.collapsed .toolbar {
      color: #428bdd !important;
      background: #000 !important;
      border: 1px solid #435a5f !important; }
      .syntaxhighlighter.collapsed .toolbar a {
        color: #428bdd !important; }
        .syntaxhighlighter.collapsed .toolbar a:hover {
          color: #1dc116 !important; }
  .syntaxhighlighter .toolbar {
    color: #D1EDFF !important;
    background: #435a5f !important;
    border: none !important; }
    .syntaxhighlighter .toolbar a {
      color: #D1EDFF !important; }
      .syntaxhighlighter .toolbar a:hover {
        color: #8aa6c1 !important; }
  .syntaxhighlighter .plain, .syntaxhighlighter .plain a {
    color: #d1edff !important; }
  .syntaxhighlighter .comments, .syntaxhighlighter .comments a {
    color: #428bdd !important; }
  .syntaxhighlighter .string, .syntaxhighlighter .string a {
    color: #1dc116 !important; }
  .syntaxhighlighter .keyword {
    font-weight: bold !important;
    color: #b43d3d !important; }
  .syntaxhighlighter .preprocessor {
    color: #8aa6c1 !important; }
  .syntaxhighlighter .variable {
    color: #ffaa3e !important; }
  .syntaxhighlighter .value {
    color: #f7e741 !important; }
  .syntaxhighlighter .functions {
    color: #ffaa3e !important; }
  .syntaxhighlighter .constants {
    color: #e0e8ff !important; }
  .syntaxhighlighter .script {
    font-weight: bold !important;
    color: #b43d3d !important;
    background-color: none !important; }
  .syntaxhighlighter .color1, .syntaxhighlighter .color1 a {
    color: #f8bb00 !important; }
  .syntaxhighlighter .color2, .syntaxhighlighter .color2 a {
    color: white !important; }
  .syntaxhighlighter .color3, .syntaxhighlighter .color3 a {
    color: #ffaa3e !important; }
*/

.syntaxhighlighter table caption {
	border-bottom: 1px solid #ccc !important;
	font-weight: bold !important;
	font-family: Tahoma, Verdana, Arial, sans-serif !important;
	padding: 0 0 3px 0 !important;
	
	margin: 0 0 10px 0px !important;
}
.syntaxhighlighter table caption span {
    font-weight: normal !important;
}