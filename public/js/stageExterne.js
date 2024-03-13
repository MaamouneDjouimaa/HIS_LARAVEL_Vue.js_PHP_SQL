const correspondenceOfficielleFields = document.getElementById('correspondance-officielle-fields');
const etablissementSpecifiqueFields = document.getElementById('etablissement-specifique-fields');
const radioCorrespondance = document.getElementById('radio-correspondance');
const radioEtablissement = document.getElementById('radio-etablissement');

radioCorrespondance.addEventListener('change', function() {
  if (radioCorrespondance.checked) {
    correspondenceOfficielleFields.style.display = 'block';
    etablissementSpecifiqueFields.style.display = 'none';
  }
});

radioEtablissement.addEventListener('change', function() {
  if (radioEtablissement.checked) {
    correspondenceOfficielleFields.style.display = 'none';
    etablissementSpecifiqueFields.style.display = 'block';
  }
});
