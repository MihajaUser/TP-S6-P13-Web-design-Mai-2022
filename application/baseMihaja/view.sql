  
CREATE view view_stock_premiere As
  select 
  stocks_premiere.id As stocks_premiereId ,
  stocks_premiere.id_premiere As stocks_premiereId_premiere,
  stocks_premiere.entre As stocks_premiereEntre,
   stocks_premiere.sortie As stocks_premiereSortie,
   stocks_premiere.date_transaction As stocks_premiereDate,
  matieres_premiere.minimum_Stock As matieres_premiereMinimum,
  matieres_premiere.nom As matieres_premiereNom ,
  matieres_premiere.prix_unitaire As matieres_premierePrix_unitaire
    from stocks_premiere
    INNER join matieres_premiere on matieres_premiere.id=stocks_premiere.id_premiere
  ;
  

  CREATE view view_achats_premiere As
  select 
  Achats_premiere.date_commande,
  Achats_premiere.quantite,
  Achats_premiere.id_premiere As  Achats_premiereId_premiere,
  matieres_premiere.nom As matieres_premiereNom ,
  matieres_premiere.prix_unitaire As matieres_premierePrix_unitaire
    from Achats_premiere
    INNER join matieres_premiere on matieres_premiere.id=Achats_premiere.id_premiere
  ;

  CREATE view view_stock_premiere_reste As
  select 
   matieres_premiere.id As matieres_premiereId ,
   matieres_premiere.nom As matieres_premiereNom ,
  matieres_premiere.prix_unitaire As matieres_premierePrix_unitaire,
  matieres_premiere.minimum_Stock As matieres_premiereMinimum,
  sum(stocks_premiere.entre)-sum(stocks_premiere.sortie) as reste
         from
          stocks_premiere 
    INNER join matieres_premiere on matieres_premiere.id=stocks_premiere.id_premiere
    group by matieres_premiere.id
------------------------------------------------------------------------------------------
CREATE view view_formule_fini As
  select 
produits_finis.nom As produits_finisNom,
produits_finis.id As produits_finisId,
matieres_premiere.id As matieres_premiereId ,
matieres_premiere.nom As matieres_premiereNom ,
Formule_fini.pourcentage as pourcentage,
         from Formule_fini 
          INNER join matieres_premiere on matieres_premiere.id=Formule_fini.id_premiere
          INNER join produits_finis on produits_finis.id=Formule_fini.id_fini
          order by produits_finisId asc;

------------------------------------------------------------------------------------------
CREATE view view_stock_fini As
  select 
  stocks_fini.id As stocks_finiId ,
  stocks_fini.id_fini As stocks_finiId_fini,
  stocks_fini.entre As stocks_finiEntre,
  stocks_fini.sortie As stocks_finiSortie,
  stocks_fini.date_transaction As stocks_finiDate,
  produits_finis.id As produits_finisId,
  produits_finis.nom As produits_finisNom
    from stocks_fini
    INNER join produits_finis on produits_finis.id=stocks_fini.id_fini
  ;
    

    CREATE view view_stock_fini_reste As
  select 
   produits_finis.id As produits_finisId ,
   produits_finis.nom As produits_finisNom ,
  sum(stocks_fini.entre)-sum(stocks_fini.sortie) as reste
         from
          stocks_fini INNER 
    join produits_finis on produits_finis.id=stocks_fini.id_fini
    group by produits_finis.id