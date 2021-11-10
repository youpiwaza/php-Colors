# PHP / Colors 🎨

Fonctions aidant au traitement des couleurs en PHP.

Basic helpers for colors in PHP.

| Variable  / Fonction | Libellé |
|---|---|
| `$htmlColorsNamesCorrespondence` | Tableau de correspondance entre les couleurs nommées en HTML et leurs codes hexa, sans #. Ex: 'salmon' > 'FA8072 |
| `HTMLColorNameToHEX($htmlColor)` | Convertit une couleur HTML nommée en héxa, eg. 'salmon' > 'FA8072' |
| `HTMLToRGB($htmlCode)` | Convertit une chaîne de caractères html/hexa en RGB |
| `isLightColorFromRGB($htmlColorString, $lightnessThreshold = 115)` | Détermine si une couleur est claire ou foncée, en fonction d'un seuil de luminosité |
| `RGBToHSL($RGB)` | Convertit une chaîne de caractères RGB en HSL (Teinte Saturation Luminosité) |
| `testIsLightColorFromRGB()` | Test d'un ensemble de chaîne de caractères variées |

## Ressources / Le merci

- [Couleurs nommées](https://www.w3schools.com/colors/colors_names.asp)
- [Conversions](https://stackoverflow.com/a/12228733)
