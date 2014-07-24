#RFIDWebmanager

##About
本專案是繁體中文編寫 功能用於使用RFID進行社團成員的簽到，並結合Arduino來記錄資訊，向電磁鎖開門、RFID識別等等等等...

##Install
***您可以使用 XAMPP 等等有 Apache 及 MySQL 的環境軟體下進行安裝。***
使用localhost:80 打開這項專案
您會發現錯誤，這時請您在網址後面輸入 localhost:80/install 進入安裝模式
![img](https://www.dropbox.com/s/y3br3x8w9274ds4/Screen%20Shot%202014-07-24%20at%2012.22.43%20AM.png "img")
以上需要針對您的MySQL帳號密碼進行設定
```bash
$ localhost : localhost
$ username  : root
$ password  : 1234
```
接著伺服器可能會發生錯誤，錯誤解決:
	*檢查您的主機位置是否正確，帳號、密碼是否正確
	*本專案不適合安裝在網路代管的資料庫上，尤其是godaddy,主機服務商可能不會提供在localhost的位置下SQL指令。
	*手動檢查MySQL中是否有重疊以下資料庫 admin , rfid ，如果有，請示情況刪除,這個版本並沒有自動化資料庫名稱，因此更改一處就會造成伺服器掛掉!
	*您的Apache,MySQL是否正常運作
	*您的主機port是否正確(預設80)

完成後您將會轉到一個帳號配置的頁面，請輸入您的管理者帳號
![img](https://www.dropbox.com/s/95ge3tqctj2piwv/Screen%20Shot%202014-07-24%20at%2012.37.39%20AM.png "img")
完成後建議您刪除install的目錄

安裝步驟完成後會跳轉到登入頁面，登入剛剛新增的帳號後即可使用。

##Application
***本應用只用於Arduino上，使用Arduino對MySQL進行紀錄的新增與登記，包含生活自動化擴展, 另外有Arduino RRP 的專案，請搭配使用 <br>[https://github.com/hpcslag/ArduinoRRP](https://github.com/hpcslag/ArduinoRRP) .***


