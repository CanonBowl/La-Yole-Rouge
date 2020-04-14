# La Yole Rouge
Ce projet a été conçu dans le cadre de mes études. 
Il me servira de support lors d'une épreuve d'intervention.

## Comment m'installer ?

### Prérequis
PHP v7.2.5 ou plus
```
https://www.php.net/downloads
```
Composer
```
https://getcomposer.org/download/
```
(Optionnel) Symfony CLI
```
https://symfony.com/download
```

### Installation
Se placer dans votre dossier de code et y cloner le repository
```
cd ~/code
git clone https://github.com/hencaa/La-Yole-Rouge.git
```

Mettre à jour les dépendances Composer
```
composer update
```

Mettre à jour le fichier .env avec vos informations de connexion à la base de donnée
```
DATABASE_URL=mysql://login:password@ipadress:3306/layolerouge
```

Lancer le script de migration de Doctrine
```
php bin/console doctrine:migrations:migrate
```

(Optionnel) Lancer les fixtures
```
php bin/console doctrine:fixtures:load
```

Et votre environnement est prêt, il n'y a plus qu'à lancer le serveur
```
php bin/console server:run
```