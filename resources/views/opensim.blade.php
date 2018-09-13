@include('partials.header')
<p class="centered section-title" style="font-size:3em;margin-top:20px;" >Open Simulator</p>
<div class='content col-md-12 centered'>
    <p class="centered section-text col-md-7"  style="font-size: 1.3em;">
  OpenSimulator, souvent appelé OpenSim, est un serveur open source utilisé pour héberger des mondes virtuels. Même s'il est surtout connu pour sa compatibilité avec le client de Second Life, il peut également héberger des mondes alternatifs ayant un ensemble de fonctionnalités variées et de multiples protocoles1. OpenSimulator est conçu pour être facilement complété grâce à l'utilisation de plugin ou modules. Ainsi, il existe plusieurs distributions modifiées d'Opensimulator, par exemple realXtend2. On peut trouver des plugins additionnels sur OpenSimulator Forge [archive]. Plusieurs serveurs peuvent être intégrés dans une même grille ce qui permet la simulation de zones étendues plus complexes3. OpenSimulator est écrit en C#, et peut tourner sous les environnements Mono ou Microsoft .NET.
</p><br/>

  <p class="centered section-text col-md-7"  style="font-size: 1.3em;">
    OpenSimulator peut fonctionner en deux modes : en mode autonome ou en mode grille. En mode autonome, un seul processus gère l'ensemble de la simulation. En mode grille, les différents aspects de la simulation sont séparés entre plusieurs processus, qui peuvent exister sur des machines différentes. Le mode autonome est plus facile à configurer, mais il ne peut accueillir qu'un petit nombre d'utilisateurs. En revanche une grille peut grandir avec le nombre de ses usagers.

En mode grille, les responsabilités sont réparties entre les six serveurs: le serveur des utilisateurs, le serveur réseau, le serveur des biens, le serveur d'inventaire, le serveur de messagerie et le serveur de région4.

OpenSimulator utilise des modules séparées pour la plupart de ses fonctionnalités. Ces modules peuvent être développées de manière indépendante pour ajouter des fonctionnalités au serveur5.

L'objectif d'OpenSimulator est de réaliser une collection de modules indépendants OpenSimulator GForge [archive].
  </p>
<p class="centered section-text col-md-7"  style="font-size: 1.3em;">
  Actuellement OpenSimulator utilise le protocole de communication client-serveur Second Life, et il est compatible avec le navigateur Second Life de Linden Lab. Le protocole de Second Life utilise UDP et XML-RPC. Dans le futur, d'autres protocoles pourraient être implémentés. Un de ces protocoles souvent proposé est Metaverse Exchange Protocol (MXP), qui est un client de deuxième génération présenté comme protocole de communication avec le serveur. En interne, les composants du serveur OpenSimulator communiquent avec XML-RPC et REST (JSON/HTTP et XML/HTTP).
</p>
</div>

@include('partials.footer')
