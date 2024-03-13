const postulerSeuleRadio = document.getElementById('postuler-seule');
    const postulerBinomRadio = document.getElementById('postuler-binom');
    const binomFields = document.getElementById('binom-fields');

    postulerSeuleRadio.addEventListener('change', updateDisplayBinomFields);
    postulerBinomRadio.addEventListener('change', updateDisplayBinomFields);

    function updateDisplayBinomFields() {
      if (postulerBinomRadio.checked) {
        binomFields.style.display = 'block';
      } else {
        binomFields.style.display = 'none';
      }
    }

    //---------------------
    const sujetSpecifiqueOuiRadio = document.getElementById('sujet-specifique-oui');
    const sujetSpecifiqueNonRadio = document.getElementById('sujet-specifique-non');
    const sujetSpecifiqueFields = document.getElementById('sujet-specifique-fields');
    const rechercherFields = document.getElementById('rechercher-fields');

    sujetSpecifiqueOuiRadio.addEventListener('change', updateDisplaySujetSpecifiqueFields);
    sujetSpecifiqueNonRadio.addEventListener('change', updateDisplaySujetSpecifiqueFields);

    function updateDisplaySujetSpecifiqueFields() {
      if (sujetSpecifiqueOuiRadio.checked) {
        sujetSpecifiqueFields.style.display = 'block';
        rechercherFields.style.display = 'none';
      } else if (sujetSpecifiqueNonRadio.checked) {
        sujetSpecifiqueFields.style.display = 'none';
        rechercherFields.style.display = 'block';
      }
    }

    //---------------------
    const rechercherEnseignantRadio = document.getElementById('rechercher-enseignant');
    const rechercherSujetRadio = document.getElementById('rechercher-sujet');
    const rechercherEnseignantFields = document.getElementById('rechercher-enseignant-fields');
    const rechercherSujetFields = document.getElementById('rechercher-sujet-fields');

    rechercherEnseignantRadio.addEventListener('change', updateDisplayRechercherFields);
    rechercherSujetRadio.addEventListener('change', updateDisplayRechercherFields);

    function updateDisplayRechercherFields() {
      if (rechercherEnseignantRadio.checked) {
        rechercherEnseignantFields.style.display = 'block';
        rechercherSujetFields.style.display = 'none';
      } else if (rechercherSujetRadio.checked) {
        rechercherEnseignantFields.style.display = 'none';
        rechercherSujetFields.style.display = 'block';
      }
    }
