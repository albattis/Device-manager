# Device-manager

Laptop- és eszközkezelő rendszer – PHP & MySQL

Ez a projekt egy belső eszköznyilvántartó rendszer, amely a saját sulimunkák és fejlesztési gyakorlatok során készült. Célja, hogy a laptopok, monitorok és PC-k kezelését egyszerűsítse, és áttekinthető, nyomtatható formában jelenítse meg az eszközparkot, ezzel kiváltva a kézi, Word-dokumentumos adminisztrációt.

Főbb funkciók:

Eszközök kezelése: létrehozás, megjelenítés, módosítás, állapotfrissítés.

Részletes nyomtatási lista: összefoglaló a teljes eszközállományról, gyártóval, specifikációval, árakkal és státusszal.

Multimédiás támogatás: képfeltöltés eszközönként, könnyen áttekinthető galériával.

Rugalmas felület: reszponzív elrendezés, vizuális gombok az állapotok gyors módosításához (pl. készlet, memória, csatlakozók).

Technikai megvalósítás:

Backend: PHP objektumorientált kód, saját osztályokkal (Laptop, Gyarto) és modularizált logikával (laptopmodify, laptopupload).

Adatbázis: MySQL, strukturált táblázatokkal a gyártók és eszközök kezelésére, lekérdezések és CRUD műveletek támogatásával.

Fájlfeltöltés: több képfájl kezelése egy eszközhöz, dinamikusan generált galéria.

Felhasználói élmény: intuitív gombok és űrlapok az adatmódosításhoz, azonnali frissítés (refreshpage), valamint nyomtatás barát nézet.

Tanulási folyamat:
Ez volt az első nagyobb projektem amivel valós hatékonyságot lehetett elérni azáltal hogy nem kell word dokumentum szerkesztéssel időt tölteni. A teljes kódot hibáról hibára fejlesztettem, így minden funkció mögött saját megértés és logika áll. Megtanultam osztály struktúrákat kialakítani, adatbázis-kezelést implementálni és komplex űrlap logikát létrehozni. A projekt a bevezetés után is stabilan működik.



