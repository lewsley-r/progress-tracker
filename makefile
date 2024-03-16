setup:
	npm install --prefix ./backend 
	npm --prefix ./backend run build
	cd backend && composer install --ignore-platform-req=ext-xml --ignore-platform-req=ext-dom
	npm install --prefix ./frontend
	make db
	make seed
	@echo "Set-up is complete with default admin login;"
	@echo "*** User: admin@admin.com ***"
	@echo "*** Password: xpAdmin ***"

db:	
	sudo chmod 777 backend/dartisan
	cd backend && ./dartisan key:generate
	cd backend && ./dartisan migrate

start:
	cd backend && docker-compose up -d

stop:
	cd backend && docker-compose stop

seed:
	cd backend && ./dartisan db:seed
