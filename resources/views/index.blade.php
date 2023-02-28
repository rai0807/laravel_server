 <!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>投稿一覧</title>
 </head>
 
 <body>
     <header>
         <nav>
             <div>
                 <a href="#">投稿アプリ</a>            
             </div>
         </nav>
     </header>
     
     <main>
         <article>
             <div>                
                 <h1>投稿一覧</h1>               
             </div>
         </article>
         <form action="/store"  method="post">
        @csrf
        
            <div class="form-group mb-3">
                <div>
                    <label>名前</label>
                </div>
                <div>
                    <input type="text" class="form-control" name="name" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                <label>フリガナ</label>
                    <br>
                </div>
                <div>
                    <input type="text" class="form-control" name="hurigana" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                    <label>メールアドレス</label>
                    <br>
                </div>
                <div>
                    <input type="text" class="form-control" name="email" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                    <label>電話番号</label>
                    <br>
                </div>
                <div>
                    <input type="text" class="form-control" name="tel" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                  <label>お問い合わせ内容</label>
                  <br>
                </div>
                <div>
                  <textarea class="form-control" placeholder="入力してください" name="message"></textarea>

                </div>
            </div>            
            <div>
                <input type="submit" class="btn btn-outline-primary" value="送信">
            </div>
        </form>
     </main>
 
     <footer>        
         <p>&copy; 投稿アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>
