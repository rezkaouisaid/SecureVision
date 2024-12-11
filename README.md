# SecureVision 🌐🔐
Projet : Conception d’un Centre de Surveillance de la Sécurité (SOC)

Ce projet vise à concevoir et déployer un Centre de Surveillance de la Sécurité (Security Operations Center, SOC) pour une entreprise. Le SOC constitue une entité stratégique dédiée à la supervision proactive et en temps réel des infrastructures critiques, notamment les réseaux, les systèmes, les applications et les données sensibles.

Le rôle principal du SOC est de détecter, analyser et répondre efficacement aux menaces de sécurité et aux incidents potentiels, en assurant une protection constante contre les cyberattaques, les failles de sécurité, et les violations des politiques internes.

Dans ce cadre, les objectifs clés du projet incluent :

Analyse des besoins organisationnels : Identifier les menaces spécifiques à l’entreprise, évaluer les ressources existantes, et définir les objectifs de surveillance.

Conception de l’architecture SOC : Élaborer une infrastructure adaptée, intégrant des outils avancés de supervision (SIEM, EDR, IDS/IPS) et des tableaux de bord analytiques pour la visualisation des données.

Automatisation et orchestration : Mettre en place des mécanismes d’automatisation pour accélérer la détection des incidents, l’analyse des journaux, et les réponses correctives.

Formation et organisation des équipes : Définir les rôles des analystes, ingénieurs, et responsables, tout en structurant les processus de collaboration.

Mise en conformité : Assurer que le SOC respecte les réglementations et normes de sécurité (ISO 27001, GDPR, etc.).
En finalité, ce SOC permettra à l’entreprise d’améliorer sa résilience face aux cybermenaces tout en optimisant la visibilité sur son environnement numérique et en renforçant sa posture de sécurité globale.


Nous avons choisi la topologie au dessous pour isoler le réseau interne du réseau externe, en utilisant un pare-feu pour filtrer et sécuriser le trafic entre les deux. Le routeur externe permet de connecter notre réseau à l'opérateur ou à Internet, tandis que le routeur interne répartit le trafic entre les sous-réseaux dédiés aux PC et aux serveurs. Cette structure nous permet non seulement de contrôler et sécuriser les échanges de données, mais aussi de capturer et analyser le trafic à différents points, afin de tester la performance du réseau et la sécurité des connexions.

![topologie](https://github.com/user-attachments/assets/194169ba-3fc9-464c-aaf5-e17141c0f252)

On a utilisé pfSense qui est un système d'exploitation open-source basé sur FreeBSD, conçu pour fonctionner comme un pare-feu. Il offre une interface web intuitive permettant de configurer et de gérer facilement des fonctions de sécurité réseau avancées.

On a commencé par installé pfsense :

<img width="341" alt="CLI" src="https://github.com/user-attachments/assets/536c215a-19e6-495a-af8e-c1631f9de732">


Voici l'interface graphique de pfsense :
![Uploading gui.png…]()







