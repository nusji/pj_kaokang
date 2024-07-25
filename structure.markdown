project-root/
  .git/            # Git configuration and source directory (เก็บข้อมูลการกำหนดค่าและประวัติการเปลี่ยนแปลงของ Git)
  assets/          # Uncompiled/raw CSS, LESS, Sass, JavaScript, images (ไฟล์ CSS, LESS, Sass, JavaScript และรูปภาพที่ยังไม่ได้คอมไพล์)
  bin/             # Command line scripts (สคริปต์สำหรับใช้งานผ่าน Command line)
  config/          # Application configuration (ไฟล์การกำหนดค่าต่างๆ ของแอปพลิเคชัน)
  node_modules/    # Node.js modules for managing front end (โมดูลของ Node.js สำหรับจัดการส่วนหน้าของเว็บไซต์)
  public/          # Publicly accessible files at http://example.com/ (ไฟล์ที่สามารถเข้าถึงได้จากภายนอก)
      index.php    # Main entry point - front controller (จุดเริ่มต้นหลักของแอปพลิเคชัน)
      ...
  src/             # PHP source code files (ไฟล์ซอร์สโค้ด PHP)
      Controller/  # Controllers (ไฟล์ควบคุมการทำงานของแอปพลิเคชัน)
      ...
  templates/       # Template files (ไฟล์เทมเพลตสำหรับการแสดงผล)
  tests/           # Unit and functional tests (ไฟล์ทดสอบหน่วยและการทำงาน)
  translations/    # Translation files (ไฟล์การแปล)
      en_US.yaml
  var/             # Temporary application files (ไฟล์ชั่วคราวของแอปพลิเคชัน)
      cache/       # Cache files (ไฟล์แคช)
      log/         # Application specific log files (ไฟล์บันทึกการทำงานของแอปพลิเคชัน)
  vendor/          # 3rd party packages and components with Composer (แพ็กเกจและคอมโพเนนต์ของบุคคลที่สามที่ติดตั้งผ่าน Composer)
  .gitignore       # Ignored files and dirs in Git (node_modules, var, vendor...) (ไฟล์ที่ระบุว่าไฟล์และโฟลเดอร์ใดบ้างที่ Git จะไม่ติดตาม)
  composer.json    # Composer dependencies file (ไฟล์การตั้งค่า dependencies ของ Composer)
  phpunit.xml.dist # PHPUnit configuration file (ไฟล์การตั้งค่า PHPUnit)
